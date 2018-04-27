<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require dirname(__FILE__).'/../vendor/autoload.php';
use Google\Cloud\Logging\LoggingClient;

function print_stats($name, $stats)
{
    echo "stats result for ". $name .PHP_EOL;
    echo "50% latency :". $stats[count($stats)*0.5]. PHP_EOL;
    echo "80% latency :". $stats[count($stats)*0.8]. PHP_EOL;
    echo "90% latency :". $stats[count($stats)*0.9]. PHP_EOL;
    echo "99% latency :". $stats[min(count($stats)*0.99, count($stats) - 1)]. PHP_EOL;

}

function qps_client_main()
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

    $grpcLogger = LoggingClient::psrBatchLogger(
        'perf-rest',
        [
            'clientConfig' => [
                'transport' => 'grpc'
            ],
            'batchOptions' => ['batchSize' => 1]
        ]
    );

    $warm_up_time = 10;
    $benchmark_time = 30;
    $rest_benchmark_count = 0;
    $rest_latency_array = array();
    $grpc_benchmark_count = 0;
    $grpc_latency_array = array();

    $start_time = microtime(true);
    echo "rest transport starts warmup...";
    while(1) {
        if (microtime(true) - $start_time > $warm_up_time) {
            break;
        }
        $restLogger->info('a');
    }
    echo "rest transport starts benchmark...".PHP_EOL;
    $start_time = microtime(true);
    while(1) {
        $cur_time = microtime(true);
        if ($cur_time - $start_time > $warm_up_time) {
            break;
        }
        $restLogger->info('b');
        array_push($rest_latency_array, microtime(true) - $cur_time);
        $rest_benchmark_count += 1;
    }
    echo "rest transport qps: ".($rest_benchmark_count/$benchmark_time).PHP_EOL;
    sort($rest_latency_array);
    print_stats("REST", $rest_latency_array);

    $start_time = microtime(true);
    echo "gRPC transport starts warmup...";
    while(1) {
        if (microtime(true) - $start_time > $warm_up_time) {
            break;
        }
        $grpcLogger->info('a');
    }
    echo "gRPC transport starts benchmark...".PHP_EOL;
    $start_time = microtime(true);
    while(1) {
        $cur_time = microtime(true);
        if ($cur_time - $start_time > $warm_up_time) {
            break;
        }
        $grpcLogger->info('b');
        array_push($grpc_latency_array, microtime(true) - $cur_time);
        $grpc_benchmark_count += 1;
    }
    echo "gRPC transport qps: ".($grpc_benchmark_count/$benchmark_time).PHP_EOL;
    sort($grpc_latency_array);
    print_stats("gRPC", $grpc_latency_array);

}

qps_client_main();