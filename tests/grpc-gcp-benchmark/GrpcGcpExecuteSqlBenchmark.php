<?php

header('Content-type: text/plain');
putenv("GOOGLE_APPLICATION_CREDENTIALS=./../grpc-gcp.json");

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../../vendor/autoload.php');

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
$opts_grpc_gcp = [
    'credentials' => $credentials,
    'update_metadata' => $auth->getUpdateMetadataFunc(),
    'grpc_call_invoker' => $config->callInvoker(),
  ];

$opts_grpc = [
    'credentials' => $credentials,
    'update_metadata' => $auth->getUpdateMetadataFunc(),
  ];

$stub_grpc_gcp = new SpannerGrpcClient($hostname, $opts_grpc_gcp);
$stub_grpc = new SpannerGrpcClient($hostname, $opts_grpc);

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

function UnaryCall($stub, $session)
{
    $table = 'storage';
    $data = 'payload';
    $sql_cmd = "select id from $table";
    $result = ['payload'];
    $database = 'projects/grpc-gcp/instances/sample/databases/benchmark';

    $exec_sql_request = new ExecuteSqlRequest();
    $exec_sql_request->setSession($session->getName());
    $exec_sql_request->setSql($sql_cmd);
    $exec_sql_call = $stub->ExecuteSql($exec_sql_request);
    list($res, $status) = $exec_sql_call->wait();
    assertStatusOk($status);
}

$create_session_request = new CreateSessionRequest();
$create_session_request->setDatabase($database);
$create_session_call = $stub_grpc->CreateSession($create_session_request);
list($session_grpc, $status) = $create_session_call->wait();
assertStatusOk($status);

$create_session_request = new CreateSessionRequest();
$create_session_request->setDatabase($database);
$create_session_call = $stub_grpc_gcp->CreateSession($create_session_request);
list($session_grpc_gcp, $status) = $create_session_call->wait();
assertStatusOk($status);

$warm_up_time = 10;
$benchmark_time = 100;
$benchmark_count = 0;
$grpc_latency_array = array();
$grpc_gcp_latency_array = array();

// warm up
$start_time = microtime(true);
while (1) {
    if (microtime(true) - $start_time > $warm_up_time) {
        break;
    }
    UnaryCall($stub_grpc, $session_grpc);
    UnaryCall($stub_grpc_gcp, $session_grpc_gcp);
}

// benchmark
$start_time = microtime(true);
while (1) {
    if (microtime(true) - $start_time > $benchmark_time) {
        break;
    }
    $benchmark_count += 1;
    $grpc_start_time = microtime(true);
    UnaryCall($stub_grpc, $session_grpc);
    array_push($grpc_latency_array, microtime(true) - $grpc_start_time);

    $grpc_gcp_start_time = microtime(true);
    UnaryCall($stub_grpc_gcp, $session_grpc_gcp);
    array_push($grpc_gcp_latency_array, microtime(true) - $grpc_gcp_start_time);
}

function print_stats($name, $stats)
{
    echo "stats result for " . $name . PHP_EOL;
    echo "Ave latency :" . array_sum($stats)/max(count($stats), 1) . PHP_EOL;
    echo "50% latency :" . $stats[count($stats)*0.5] . PHP_EOL;
    echo "80% latency :" . $stats[count($stats)*0.8] . PHP_EOL;
    echo "90% latency :" . $stats[count($stats)*0.9] . PHP_EOL;
    echo "99% latency :" . $stats[min(count($stats)*0.99, count($stats) - 1)] . PHP_EOL;
}

echo "gRPC qps: " . ($benchmark_count / array_sum($grpc_latency_array)) . PHP_EOL;
echo "gRPC gcp qps: " . ($benchmark_count / array_sum($grpc_gcp_latency_array)) . PHP_EOL;
sort($grpc_latency_array);
sort($grpc_gcp_latency_array);
print_stats("gRPC", $grpc_latency_array);
print_stats("gRPC GCP", $grpc_gcp_latency_array);
