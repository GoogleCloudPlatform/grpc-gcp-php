<?php
/*
 *
 * Copyright 2018 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
use Google\Cloud\Spanner\V1\SpannerGrpcClient;
use Google\Cloud\Spanner\V1\CreateSessionRequest;
use Google\Cloud\Spanner\V1\DeleteSessionRequest;
use Google\Auth\ApplicationDefaultCredentials;
use Google\Cloud\Spanner\V1\ExecuteSqlRequest;
use Google\Cloud\Spanner\V1\ListSessionsRequest;
use PHPUnit\Framework\TestCase;

class ChannelManagementNoConfigTest extends TestCase
{
    public function createGrpcStub($max_channels = 10, $max_streams = 1)
    {
        $this->_DEFAULT_MAX_CHANNELS_PER_TARGET = $max_channels;
        $this->_WATER_MARK = $max_streams;
        $hostname = 'spanner.googleapis.com';
        $conf = new \Grpc\Gcp\ApiConfig();
        $channel_pool = $conf->getChannelPool();
        if ($channel_pool == null) {
            $channel_pool = new \Grpc\Gcp\ChannelPoolConfig();
            $conf->setChannelPool($channel_pool);
        }
        $channel_pool->setMaxConcurrentStreamsLowWatermark($max_streams);
        $config = new \Grpc\Gcp\Config($hostname, $conf);
        $credentials = \Grpc\ChannelCredentials::createSsl();
        $auth = ApplicationDefaultCredentials::getCredentials();
        $opts = [
            'credentials' => $credentials,
            'update_metadata' => $auth->getUpdateMetadataFunc(),
            'grpc_call_invoker' => $config->callInvoker(),
        ];

        $this->stub = new SpannerGrpcClient($hostname, $opts);
        $this->call_invoker = $config->callInvoker();

        $this->database = 'projects/grpc-gcp/instances/sample/databases/benchmark';
        $this->table = 'storage';
        $this->data = 'payload';
    }

    public function assertStatusOk($status)
    {
        if ($status->code != \Grpc\STATUS_OK) {
            var_dump($status);
            throw new \Exception("gRPC status not OK: " . $status->code . "\n");
        }
    }

    // Test CreateSession Reuse Channel
    public function testCreateSessionReuseChannel()
    {
        $this->createGrpcStub();
        for ($i = 0; $i < $this->_DEFAULT_MAX_CHANNELS_PER_TARGET; $i++) {
            $create_session_request = new CreateSessionRequest();
            $create_session_request->setDatabase($this->database);
            $create_session_call = $this->stub->CreateSession($create_session_request);
            $this->assertEquals(1, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
            list($session, $status) = $create_session_call->wait();
            $this->assertStatusOk($status);
            $delete_session_request = new DeleteSessionRequest();
            $delete_session_request->setName($session->getName());
            list($session, $status) = $this->stub->DeleteSession($delete_session_request)->wait();
            $this->assertStatusOk($status);
            $result = (count($this->call_invoker->getChannel()->getChannelRefs()) == 1);
            $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
        }
    }

    // Test CreateSession New Channel
    public function testCreateSessionNewChannel()
    {
        $this->createGrpcStub();
        $rpc_calls = array();
        // All RPCs are sent by the first channel created. Because the numbers of streams
        // are less than 100.
        for ($i = 0; $i < $this->_DEFAULT_MAX_CHANNELS_PER_TARGET; $i++) {
            $create_session_request = new CreateSessionRequest();
            $create_session_request->setDatabase($this->database);
            $create_session_call = $this->stub->CreateSession($create_session_request);
            $this->assertEquals(1, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
            $this->assertEquals($i + 1, count($this->call_invoker->getChannel()->getChannelRefs()));
            array_push($rpc_calls, $create_session_call);
        }
        $sessions = array();
        for ($i = 0; $i < $this->_DEFAULT_MAX_CHANNELS_PER_TARGET; $i++) {
            list($session, $status) = $rpc_calls[$i]->wait();
            array_push($sessions, $session);
            $this->assertStatusOk($status);
        }
        for ($i = 0; $i < $this->_DEFAULT_MAX_CHANNELS_PER_TARGET; $i++) {
            $result = $this->call_invoker->getChannel()->getChannelRefs()[$i]->getActiveStreamRef();
        }
        for ($i = 0; $i < $this->_DEFAULT_MAX_CHANNELS_PER_TARGET; $i++) {
            $delete_session_request = new DeleteSessionRequest();
            $delete_session_request->setName($sessions[$i]->getName());
            $delete_session_call = $this->stub->DeleteSession($delete_session_request);
            list($session, $status) = $delete_session_call->wait();
            $this->assertStatusOk($status);
            $result = $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef();
            $this->assertEquals(0, $result);
        }
    }

    // Test Create List Delete Session
    public function testCreateListDeleteSession()
    {
        $this->createGrpcStub();
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $this->stub->CreateSession($create_session_request);
        list($session, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $list_session_request = new ListSessionsRequest();
        $list_session_request->setDatabase($this->database);
        $list_session_call = $this->stub->ListSessions($list_session_request);
        list($list_session_response, $status) = $list_session_call->wait();
        $this->assertStatusOk($status);
        //foreach ($list_session_response->getSessions() as $session) {
        //  echo "session:\n";
        //  echo "name - ". $session->getName(). PHP_EOL;
        //}
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $delete_session_request = new DeleteSessionRequest();
        $delete_session_request->setName($session->getName());
        list($delete_session_response, $status) = $this->stub->DeleteSession($delete_session_request)->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $list_session_request = new ListSessionsRequest();
        $list_session_request->setDatabase($this->database);
        $list_session_call = $this->stub->ListSessions($list_session_request);
        list($list_session_response, $status) = $list_session_call->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
    }


    // Test Execute Sql
    public function testExecuteSql()
    {
        $this->createGrpcStub();
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $this->stub->CreateSession($create_session_request);
        list($session, $status) = $create_session_call->wait();
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $sql_cmd = "select id from $this->table";
        $exec_sql_request = new ExecuteSqlRequest();
        $exec_sql_request->setSession($session->getName());
        $exec_sql_request->setSql($sql_cmd);
        $exec_sql_call = $this->stub->ExecuteSql($exec_sql_request);
        list($exec_sql_reply, $status) = $exec_sql_call->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
        $result = ['payload'];
        $i = 0;

        foreach ($exec_sql_reply->getRows() as $row) {
            foreach ($row->getValues() as $value) {
                $this->assertEquals($value->getStringValue(), $result[$i]);
                $i += 1;
            }
        }

        $delete_session_request = new DeleteSessionRequest();
        $delete_session_request->setName($session->getName());
        list($delete_session_response, $status) = $this->stub->DeleteSession($delete_session_request)->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
    }


    // Test Execute Streaming Sql
    public function testExecuteStreamingSql()
    {
        $this->createGrpcStub();
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $this->stub->CreateSession($create_session_request);
        list($session, $status) = $create_session_call->wait();
        $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $sql_cmd = "select id from $this->table";
        $stream_exec_sql_request = new ExecuteSqlRequest();
        $stream_exec_sql_request->setSession($session->getName());
        $stream_exec_sql_request->setSql($sql_cmd);
        $stream_exec_sql_call = $this->stub->ExecuteStreamingSql($stream_exec_sql_request);
        $features = $stream_exec_sql_call->responses();
        $result = ['payload'];
        $i = 0;
        foreach ($features as $feature) {
            foreach ($feature->getValues() as $value) {
                $this->assertEquals($value->getStringValue(), $result[$i]);
                $i += 1;
            }
        }
        $status = $stream_exec_sql_call->getStatus();
        $this->assertStatusOk($status);
    }

    // Test Concurrent Streams Watermark
    public function testConcurrentStreamsWatermark()
    {
        $this->createGrpcStub(10, 2);
        $sql_cmd = "select id from $this->table";
        $result = ['payload'];
        $exec_sql_calls = array();
        $sessions = array();
        for ($i=0; $i < $this->_WATER_MARK; $i++) {
            $create_session_request = new CreateSessionRequest();
            $create_session_request->setDatabase($this->database);
            $create_session_call = $this->stub->CreateSession($create_session_request);
            list($session, $status) = $create_session_call->wait();
            $this->assertStatusOk($status);
            $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals($i, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

            $exec_sql_request = new ExecuteSqlRequest();
            $exec_sql_request->setSession($session->getName());
            $exec_sql_request->setSql($sql_cmd);
            $exec_sql_call = $this->stub->ExecuteSql($exec_sql_request);
            array_push($exec_sql_calls, $exec_sql_call);
            array_push($sessions, $session);
            $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals($i + 1, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
        }

        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $this->stub->CreateSession($create_session_request);
        list($session, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
        $this->assertEquals(2, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        // The new request uses the new session id.
        $exec_sql_request = new ExecuteSqlRequest();
        $exec_sql_request->setSession($session->getName());
        $exec_sql_request->setSql($sql_cmd);
        $exec_sql_call = $this->stub->ExecuteSql($exec_sql_request);
        $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
        $this->assertEquals(2, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(1, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        // Clear session and stream
        list($exec_sql_reply, $status) = $exec_sql_call->wait();
        $this->assertStatusOk($status);
        $this->assertEquals($exec_sql_reply->getRows()[0]->getValues()[0]->getStringValue(), $result[0]);
        $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
        $this->assertEquals(2, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        $delete_session_request = new DeleteSessionRequest();
        $delete_session_request->setName($session->getName());
        list($session, $status) = $this->stub->DeleteSession($delete_session_request)->wait();
        $this->assertStatusOk($status);
        $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
        $this->assertEquals(2, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        for ($i=0; $i < $this->_WATER_MARK; $i++) {
            list($exec_sql_reply, $status) = $exec_sql_calls[$i]->wait();
            $this->assertStatusOk($status);
            $this->assertEquals($exec_sql_reply->getRows()[0]->getValues()[0]->getStringValue(), $result[0]);
            $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
            $this->assertEquals(1 - $i, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

            $delete_session_request = new DeleteSessionRequest();
            $delete_session_request->setName($sessions[$i]->getName());
            list($session, $status) = $this->stub->DeleteSession($delete_session_request)->wait();
            $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
            $this->assertEquals(1 - $i, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
        }
    }

    // Test More Than 100 Concurrent Stream
    public function testHundredConcurrentStream()
    {
        $this->createGrpcStub(10, 100);
        $sql_cmd = "select id from $this->table";
        $result = ['payload'];
        $exec_sql_calls = array();
        $sessions = array();
        $responses_result = array();
        for ($i=0; $i < $this->_WATER_MARK; $i++) {
            $create_session_request = new CreateSessionRequest();
            $create_session_request->setDatabase($this->database);
            $create_session_call = $this->stub->CreateSession($create_session_request);
            list($session, $status) = $create_session_call->wait();
            $this->assertStatusOk($status);
            $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals($i, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

            $exec_sql_request = new ExecuteSqlRequest();
            $exec_sql_request->setSession($session->getName());
            $exec_sql_request->setSql($sql_cmd);
            $exec_sql_call = $this->stub->ExecuteStreamingSql($exec_sql_request);
            $features = $exec_sql_call->responses();
            array_push($responses_result, $features);
            array_push($exec_sql_calls, $exec_sql_call);
            array_push($sessions, $session);
            $this->assertEquals(1, count($this->call_invoker->getChannel()->getChannelRefs()));
            $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
            $this->assertEquals($i + 1, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
        }
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $this->stub->CreateSession($create_session_request);
        list($session, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);

        $this->assertEquals(2, count($this->call_invoker->getChannel()->getChannelRefs()));
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
        $this->assertEquals(100, $this->call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
        $this->assertEquals(0, $this->call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());

        // The new request uses the new session id.
        $exec_sql_request = new ExecuteSqlRequest();
        $exec_sql_request->setSession($session->getName());
        $exec_sql_request->setSql($sql_cmd);
        $exec_sql_call = $this->stub->ExecuteStreamingSql($exec_sql_request);
        $features = $exec_sql_call->responses();
        array_push($exec_sql_calls, $exec_sql_call);
        foreach ($features as $feature) {
            $i = 0;
            foreach ($feature->getValues() as $value) {
                $this->assertEquals($value->getStringValue(), $result[$i]);
                $i += 1;
            }
        }
        $status = $exec_sql_call->getStatus();
        $this->assertStatusOk($status);
    }
}
