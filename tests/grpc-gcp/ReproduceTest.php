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
use Google\Auth\ApplicationDefaultCredentials;
use Google\Cloud\Spanner\V1\ExecuteSqlRequest;
use Google\Cloud\Spanner\V1\ListSessionsRequest;
use PHPUnit\Framework\TestCase;

class ReproduceTest extends TestCase
{
    public function setUp(): void
    {
        $this->_DEFAULT_MAX_CHANNELS_PER_TARGET = 10;
        $this->_WATER_MARK = 100;
        $this->database = 'projects/grpc-gcp/instances/sample/databases/benchmark';
    }

    public function createGrpcStub($enable_gcp = true)
    {
        $credentials = \Grpc\ChannelCredentials::createSsl();
        $auth = ApplicationDefaultCredentials::getCredentials();
        $hostname = 'spanner.googleapis.com';
        $opts = [
            'credentials' => $credentials,
            'update_metadata' => $auth->getUpdateMetadataFunc(),
        ];
        if ($enable_gcp) {
            $string = file_get_contents(__DIR__ . "/spanner.grpc.config");
            $conf = new \Grpc\Gcp\ApiConfig();
            $conf->mergeFromJsonString($string);
            $channel_pool = $conf->getChannelPool();
            $channel_pool->setMaxConcurrentStreamsLowWatermark($this->_WATER_MARK);
            $config = new \Grpc\Gcp\Config($hostname, $conf);
            $opts['grpc_call_invoker'] = $config->callInvoker();
            $this->call_invoker = $config->callInvoker();
        }
        $stub = new SpannerGrpcClient($hostname, $opts);
        return $stub;
    }

    public function assertStatusOk($status)
    {
        if ($status->code != \Grpc\STATUS_OK) {
            var_dump($status);
            throw new \Exception("gRPC status not OK: " . $status->code . "\n");
        }
    }

    public function sendExecuteStreamingSqlRequests($stub, $session, $number)
    {
        $exec_sql_request = array();
        $list_sessions_request = array();
        for ($i=0; $i < $number; $i++) {
            $sql_cmd = "select * from table_median";
            $exec_sql_request[$i] = new ExecuteSqlRequest();
            $exec_sql_request[$i]->setSession($session->getName());
            $exec_sql_request[$i]->setSql($sql_cmd);
        }
        $calls = array();
        for ($i=0; $i < $number; $i++) {
            $calls[$i] = $stub->ExecuteStreamingSql($exec_sql_request[$i]);
        }
        return $calls;
    }

    public function sendListSessionsRequests($stub, $session, $number)
    {
        $exec_sql_request = array();
        $list_sessions_request = array();
        for ($i=0; $i < $number; $i++) {
            $list_sessions_request[$i] = new ListSessionsRequest();
            $list_sessions_request[$i]->setDatabase($this->database);
        }
        for ($i=0; $i < $number; $i++) {
            $calls[$i] = $stub->ListSessions($list_sessions_request[$i]);
        }
        return $calls;
    }

    public function waitForResponses($calls, $number)
    {
        for ($i=0; $i < $number; $i++) {
            list($response, $status) = $calls[$i]->wait();
            $this->assertStatusOk($status);
        }
    }

    public function waitForStreamingResponses($calls, $number)
    {
        for ($i=0; $i < $number; $i++) {
            $response_call = $calls[$i]->responses();
            foreach ($response_call as $item) {
            }
            $status = $calls[$i]->getStatus();
            $this->assertStatusOk($status);
        }
    }

    public function testGrpcWithoutGCPSuccessLessThan100Streams()
    {
        $stub_no_gcp = $this->createGrpcStub(false);
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $stub_no_gcp->CreateSession($create_session_request);
        list($session_no_gcp, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);

        // Send 99 ExecuteSql rpcs and 1 ListSession rpc.
        $execute_sql_calls = $this->sendExecuteStreamingSqlRequests($stub_no_gcp, $session_no_gcp, 99);
        // ListSessions rpc will be sent immediately when there are <100 streams, like 10ms.
        $start_time = microtime(true);
        $list_sessions_calls = $this->sendListSessionsRequests($stub_no_gcp, $session_no_gcp, 1);
        $response_time = microtime(true) - $start_time;
        $this->assertLessThan(10, $response_time*1000);

        $this->waitForStreamingResponses($execute_sql_calls, 99);
        $this->waitForResponses($list_sessions_calls, 1);
    }

    public function testGrpcWithoutGCPWillHangMoreThan100Streams()
    {
        $stub_no_gcp = $this->createGrpcStub(false);
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $stub_no_gcp->CreateSession($create_session_request);
        list($session_no_gcp, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);

        // Send 100 ExecuteSql rpcs and 1 ListSession rpc.
        $execute_sql_calls = $this->sendExecuteStreamingSqlRequests($stub_no_gcp, $session_no_gcp, 100);

        // Note: for client unary server streaming, it seems after the client sends the request, the server
        // will keep sending the response, and close the stream when it finishes.
        // Although the client hasn't call the method to receive the response, the stream may have already been
        // closed. The received data seems be buffered by the completion queue inside gRPC.

        // ListSession rpc request will be block until one stream freed by the server until it can continue.
        $start_time = microtime(true);
        $list_sessions_calls = $this->sendListSessionsRequests($stub_no_gcp, $session_no_gcp, 1);
        $response_time = microtime(true) - $start_time;
        $this->assertGreaterThan(900, $response_time*1000);

        $this->waitForStreamingResponses($execute_sql_calls, 100);
        $this->waitForResponses($list_sessions_calls, 1);
    }

    public function testGrpcWithGCPSuccessLessThan100Streams()
    {
        $stub_no_gcp = $this->createGrpcStub(true);
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $stub_no_gcp->CreateSession($create_session_request);
        list($session_no_gcp, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);

        // Send 99 ExecuteSql rpcs and 1 ListSession rpc.
        $execute_sql_calls = $this->sendExecuteStreamingSqlRequests($stub_no_gcp, $session_no_gcp, 99);
        // ListSessions rpc will be sent immediately when there are <100 streams, like 10ms.
        $start_time = microtime(true);
        $list_sessions_calls = $this->sendListSessionsRequests($stub_no_gcp, $session_no_gcp, 1);
        $response_time = microtime(true) - $start_time;
        $this->assertLessThan(10, $response_time*1000);

        $this->waitForStreamingResponses($execute_sql_calls, 99);
        $this->waitForResponses($list_sessions_calls, 1);
    }

    public function testGrpcWithGCPSuccessMoreThan100Streams()
    {
        $stub_no_gcp = $this->createGrpcStub(true);
        $create_session_request = new CreateSessionRequest();
        $create_session_request->setDatabase($this->database);
        $create_session_call = $stub_no_gcp->CreateSession($create_session_request);
        list($session_no_gcp, $status) = $create_session_call->wait();
        $this->assertStatusOk($status);

        // Send 100 ExecuteSql rpcs and 1 ListSession rpc.
        $execute_sql_calls = $this->sendExecuteStreamingSqlRequests($stub_no_gcp, $session_no_gcp, 100);
        // ListSessions rpc will be sent immediately when there are <100 streams. Since this rpc is sent by a
        // new channel, there is some extra latency like ssl handshake or fetch auth token. Thus use 100ms for
        // the test.
        $start_time = microtime(true);
        $list_sessions_calls = $this->sendListSessionsRequests($stub_no_gcp, $session_no_gcp, 1);
        $response_time = microtime(true) - $start_time;
        $this->assertLessThan(100, $response_time*1000);

        $this->waitForStreamingResponses($execute_sql_calls, 100);
        $this->waitForResponses($list_sessions_calls, 1);
    }
}
