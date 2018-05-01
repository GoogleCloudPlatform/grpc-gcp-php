<?php
use Google\Cloud\Logging\Logger;
use Google\Cloud\Logging\LoggingClient;
putenv("GOOGLE_APPLICATION_CREDENTIALS=./grpcwebtesting_key.json");
require_once './vendor/autoload.php';

$start_time = microtime(true);
$grpcLogger = LoggingClient::psrBatchLogger(
  'perf-grpc',
  [
    'clientConfig' => [
      'transport' => 'grpc'
    ],
    'batchOptions' => ['batchSize' => 1]
  ]
);

$grpcLogger->info('s');
$first_latency = microtime(true) - $start_time;
echo "rest latency for first RPC:". $first_latency. PHP_EOL;
file_put_contents('logs_grpc.txt', $first_latency.PHP_EOL , FILE_APPEND | LOCK_EX);

