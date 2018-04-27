<?php

require dirname(__FILE__).'/../vendor/autoload.php';
require dirname(__FILE__).'/../benchmark.php';
use Google\Cloud\Logging\LoggingClient;

function qps_client_main($arg_warm_up, $arg_benchmark)
{
    // Disable the batch so each request stands for a RPC
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

    $rest_benchmark_count = 0;
    $rest_latency_array = array();
    $rest_first_latency = 0;

    // REST QPS test begin
    $start_time = microtime(true);
    $restLogger->info('a');
    $rest_first_latency = microtime(true) - $start_time;
    $start_time = microtime(true);
    echo "rest transport starts warmup...". PHP_EOL;
    while(1) {
        if (microtime(true) - $start_time > $warm_up_time) {
            break;
        }
        $restLogger->info('a');
    }
    echo "rest transport starts benchmark...". PHP_EOL;
    $start_time = microtime(true);
    while(1) {
        $cur_time = microtime(true);
        if ($cur_time - $start_time > $benchmark_time) {
            break;
        }
        $restLogger->info('b');
        array_push($rest_latency_array, microtime(true) - $cur_time);
        $rest_benchmark_count += 1;
    }

    echo "rest transport qps: ". ($rest_benchmark_count/$benchmark_time). PHP_EOL;
    echo "rest latency for first RPC:". $rest_first_latency. PHP_EOL;
    sort($rest_latency_array);
    print_stats("REST", $rest_latency_array);
}

$arg_warmup = !empty($argv[1]) ? $argv[1] : 20;
$arg_benchmark = !empty($argv[2]) ? $argv[2] : 40;
qps_client_main($arg_warmup, $arg_benchmark);

