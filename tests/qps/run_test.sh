#!/bin/bash

# LoggingClient
php -d extension=grpc.so -d extension=protobuf.so Logging/LoggingClientCrossTests.php 40 80


