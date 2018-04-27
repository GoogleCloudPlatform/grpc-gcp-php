<?php

require dirname(__FILE__).'/../vendor/autoload.php';
require dirname(__FILE__).'/../benchmark.php';
use Google\Cloud\Logging\LoggingClient;

function qps_client_main($arg_warm_up, $arg_benchmark)
{
    // Disable the batch so each request stands for a RPC
    $grpcLogger = LoggingClient::psrBatchLogger(
        'perf-gRPC',
        [
            'clientConfig' => [
                'transport' => 'grpc'
            ],
            'batchOptions' => ['batchSize' => 1]
        ]
    );

    $warm_up_time = $arg_warm_up;
    $benchmark_time = $arg_benchmark;

    $grpc_benchmark_count = 0;
    $grpc_latency_array = array();
    $grpc_first_latency = 0;

    // gRPC QPS test begin
    $start_time = microtime(true);
    $grpcLogger->info('a');
    $grpc_first_latency = microtime(true) - $start_time;
    $start_time = microtime(true);
    echo "gRPC transport starts warmup...". PHP_EOL;
    while(1) {
        if (microtime(true) - $start_time > $warm_up_time) {
            break;
        }
        $grpcLogger->info('a');
    }
    echo "gRPC transport starts benchmark...". PHP_EOL;
    $start_time = microtime(true);
    while(1) {
        $cur_time = microtime(true);
        if ($cur_time - $start_time > $benchmark_time) {
            break;
        }
        $grpcLogger->info('b');
        array_push($grpc_latency_array, microtime(true) - $cur_time);
        $grpc_benchmark_count += 1;
    }

    echo "gRPC transport qps: ".($grpc_benchmark_count/$benchmark_time).PHP_EOL;
    echo "gRPC latency for first RPC:". $grpc_first_latency. PHP_EOL;
    sort($grpc_latency_array);
    print_stats("gRPC", $grpc_latency_array);
}

$arg_warmup = !empty($argv[1]) ? $argv[1] : 20;
$arg_benchmark = !empty($argv[2]) ? $argv[2] : 40;
qps_client_main($arg_warmup, $arg_benchmark);

