<?php
use Google\Cloud\Logging\Logger;
use Google\Cloud\Logging\LoggingClient;
putenv("GOOGLE_APPLICATION_CREDENTIALS=./grpcwebtesting_key.json");
require_once './vendor/autoload.php';

$restLogger = LoggingClient::psrBatchLogger(
     'perf-rest',
     [
         'clientConfig' => [
             'transport' => 'rest'
            ],
            'batchOptions' => ['batchSize' => 1]
        ]
);

$start_time = microtime(true);
$restLogger->info('e');
$first_latency = microtime(true) - $start_time;
echo "rest latency for first RPC:". $first_latency. PHP_EOL;
file_put_contents('logs_rest.txt', $first_latency.PHP_EOL , FILE_APPEND | LOCK_EX);
