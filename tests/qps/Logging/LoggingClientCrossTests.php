<?php

require dirname(__FILE__).'/../vendor/autoload.php';
require dirname(__FILE__).'/../benchmark.php';
use Google\Cloud\Logging\LoggingClient;

function qps_client_main($arg_warm_up, $arg_benchmark, $payload)
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
    for ($i = 0; $i < count($payload); $i++) {
        $rest_latency_array[$i] = array();
        $grpc_latency_array[$i] = array();
    }

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
        for ($i = 0; $i < count($payload); $i++) {
            $payload_size = $payload[$i];
            $msg_grpc = generate_string($payload_size);
            $msg_rest = generate_string($payload_size);

            $grpc_start_time = microtime(true);
            $grpcLogger->info($msg_grpc);
            array_push($grpc_latency_array[$i], microtime(true) - $grpc_start_time);

            $rest_start_time = microtime(true);
            $restLogger->info($msg_rest);
            array_push($rest_latency_array[$i], microtime(true) - $rest_start_time);
        }
    }

    for ($i = 0; $i < count($payload); $i++) {
        echo "=====================". PHP_EOL;
        echo "payload: ". $payload[$i]. PHP_EOL;
        echo "gRPC transport qps: " . ($benchmark_count / array_sum($grpc_latency_array[$i])) . PHP_EOL;
        sort($grpc_latency_array[$i]);
        print_stats("gRPC", $grpc_latency_array[$i]);

        echo "rest transport qps: " . ($benchmark_count / array_sum($rest_latency_array[$i])) . PHP_EOL;
        sort($rest_latency_array[$i]);
        print_stats("REST", $rest_latency_array[$i]);
    }
}

$arg_warmup = !empty($argv[1]) ? $argv[1] : 2;
$arg_benchmark = !empty($argv[2]) ? $argv[2] : 40;
$payload = array();
if(!empty($argv[3])) {
    $payload = array_map('intval', explode(',', $argv[3]));
} else {
    $payload = array(1, 10, 100, 1024, 10240);
}
qps_client_main($arg_warmup, $arg_benchmark, $payload);

