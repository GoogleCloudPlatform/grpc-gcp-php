<?php

header('Content-type: text/plain');
putenv("GOOGLE_APPLICATION_CREDENTIALS=./grpc-gcp.json");

require_once(__DIR__ . '/../../../vendor/autoload.php');

use Google\Cloud\Spanner\V1\SpannerGrpcClient;
use Google\Cloud\Spanner\V1\DeleteSessionRequest;

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

print_r($call_invoker->getChannel()->getChannelRefs());

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

assertEqual(2, count($call_invoker->getChannel()->getChannelRefs()));
assertEqual(1, $call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
assertEqual(2, $call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());

$sessions = apcu_fetch('gcp_sessions');
print_r($sessions);
for ($i = 0; $i < $_WATER_MARK + 1; $i++) {
    $sessions_name = $sessions[$i];
    $delete_session_request = new DeleteSessionRequest();
    $delete_session_request->setName($sessions_name);
    list($delete_session_response, $status) = $stub->DeleteSession($delete_session_request)->wait();
}

assertEqual(2, count($call_invoker->getChannel()->getChannelRefs()));
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[0]->getAffinityRef());
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[0]->getActiveStreamRef());
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[1]->getAffinityRef());
assertEqual(0, $call_invoker->getChannel()->getChannelRefs()[1]->getActiveStreamRef());
