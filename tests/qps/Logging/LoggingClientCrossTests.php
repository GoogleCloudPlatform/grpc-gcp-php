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

    $restLogger = LoggingClient::psrBatchLogger(
        'perf-rest',
        [
            'clientConfig' => [
                'transport' => 'rest'
            ],
            'batchOptions' => ['batchSize' => 1]
        ]
    );

    $warm_up_time = $arg_warm_up;
    $benchmark_time = $arg_benchmark;

    $benchmark_count = 0;
    $rest_latency_array = array();
    $grpc_latency_array = array();

    // First latency
    $start_time = microtime(true);
    $grpcLogger->info('a');
    $grpc_first_latency = microtime(true) - $start_time;

    $start_time = microtime(true);
    $restLogger->info('a');
    $rest_first_latency = microtime(true) - $start_time;

    // Warm up
    $start_time = microtime(true);
    echo "Start warmup...". PHP_EOL;
    while(1) {
        if (microtime(true) - $start_time > $warm_up_time) {
            break;
        }
        $grpcLogger->info('a');
        $restLogger->info('a');
    }
    // Benchmark
    echo "Start benchmark...". PHP_EOL;
    $start_time = microtime(true);
    while(1) {
        if (microtime(true) - $start_time > $benchmark_time) {
            break;
        }
        $benchmark_count += 1;

        $grpc_start_time = microtime(true);
        $grpcLogger->info('b');
        array_push($grpc_latency_array, microtime(true) - $grpc_start_time);

        $rest_start_time = microtime(true);
        $restLogger->info('b');
        array_push($rest_latency_array, microtime(true) - $rest_start_time);
    }

    echo "gRPC transport qps: ".($benchmark_count/array_sum($grpc_latency_array)).PHP_EOL;
    echo "gRPC latency for first RPC:". $grpc_first_latency. PHP_EOL;
    sort($grpc_latency_array);
    print_stats("gRPC", $grpc_latency_array);

    echo "rest transport qps: ". ($benchmark_count/array_sum($rest_latency_array)). PHP_EOL;
    echo "rest latency for first RPC:". $rest_first_latency. PHP_EOL;
    sort($rest_latency_array);
    print_stats("REST", $rest_latency_array);
}

$arg_warmup = !empty($argv[1]) ? $argv[1] : 20;
$arg_benchmark = !empty($argv[2]) ? $argv[2] : 40;
qps_client_main($arg_warmup, $arg_benchmark);

