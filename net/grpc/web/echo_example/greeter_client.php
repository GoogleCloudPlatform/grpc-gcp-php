<?php
require dirname(__FILE__).'/vendor/autoload.php';

$client = new \Grpc\Gateway\Testing\EchoServiceClient('localhost:9091', []);

$echo_request = new \Grpc\Gateway\Testing\EchoRequest();
$message = "Hello";
$echo_request->setMessage($message);
$call_echo = $client->Echo($echo_request);

$streamRequest = new \Grpc\Gateway\Testing\ServerStreamingEchoRequest();
$streamRequest->setMessage($message);
$streamRequest->setMessageCount(3);
$streamRequest->setMessageInterval(500);
$call_stream_echo = $client->ServerStreamingEcho($streamRequest);

// Get response
$streamResponse = $call_stream_echo->responses($streamRequest);
list($reply, $status)  = $call_echo->wait();
// Print response
echo "Echo response:".PHP_EOL.$reply->getMessage().PHP_EOL;
echo "StreamEcho response:".PHP_EOL;
foreach ($streamResponse as $feature) {
    echo $feature->getMessage().PHP_EOL;
}
$client->close();
