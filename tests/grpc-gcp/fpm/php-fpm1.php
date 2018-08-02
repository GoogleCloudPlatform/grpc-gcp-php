<?php

header('Content-type: text/plain');
putenv("GOOGLE_APPLICATION_CREDENTIALS=./grpc-gcp.json");

require_once(__DIR__ . '/../../../vendor/autoload.php');

use Google\Cloud\Spanner\V1\SpannerGrpcClient;
use Google\Cloud\Spanner\V1\CreateSessionRequest;
use Google\Cloud\Spanner\V1\ExecuteSqlRequest;
use Google\Auth\ApplicationDefaultCredentials;

$_DEFAULT_MAX_CHANNELS_PER_TARGET = 10;
$_WATER_MARK = 2;

$hostname = 'spanner.googleapis.com';
$string = file_get_contents("../spanner.grpc.config");

$conf = new \Grpc\Gcp\ApiConfig();
$conf->mergeFromJsonString($string);
$channel_pool = $conf->getChannelPool();
$channel_pool->setMaxConcurrentStreamsLowWatermark($_WATER_MARK);
$config = new \Grpc\Gcp\Config($hostname, $conf);

$credentials = \Grpc\ChannelCredentials::createSsl();
$auth = ApplicationDefaultCredentials::getCredentials();
$opts = [
    'credentials' => $credentials,
    'update_metadata' => $auth->getUpdateMetadataFunc(),
    'grpc_call_invoker' => $config->callInvoker(),
];

$stub = new SpannerGrpcClient($hostname, $opts);
$call_invoker = $config->callInvoker();

$database = 'projects/grpc-gcp/instances/sample/databases/benchmark';
$table = 'storage';
$data = 'payload';


function assertEqual($var1, $var2, $str = "")
{
    if ($var1 != $var2) {
        throw new \Exception("$str $var1 not matches to $var2.\n");
    }
}
function assertStatusOk($status)
{
    if ($status->code != \Grpc\STATUS_OK) {
        var_dump($status);
        throw new \Exception("gRPC status not OK: " . $status->code . "\n");
    }
}

// Test Concurrent Streams Watermark
$sql_cmd = "select id from $table";
$result = ['payload'];
$exec_sql_calls = array();
$sessions = array();
for ($i=0; $i < $_WATER_MARK + 1; $i++) {
    $create_session_request = new CreateSessionRequest();
    $create_session_request->setDatabase($database);
    $create_session_call = $stub->CreateSession($create_session_request);
    list($session, $status) = $create_session_call->wait();
    assertStatusOk($status);

    $exec_sql_request = new ExecuteSqlRequest();
    $exec_sql_request->setSession($session->getName());
    $exec_sql_request->setSql($sql_cmd);
    $exec_sql_call = $stub->ExecuteSql($exec_sql_request);
    array_push($exec_sql_calls, $exec_sql_call);
    array_push($sessions, $session->getName());
}

apcu_add('gcp_sessions', $sessions);

for ($i=0; $i < $_WATER_MARK + 1; $i++) {
    list($exec_sql_reply, $status) = $exec_sql_calls[$i]->wait();
    assertStatusOk($status);
}

print_r($call_invoker->getChannel()->getChannelRefs());
