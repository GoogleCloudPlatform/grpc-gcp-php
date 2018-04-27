#!/bin/bash

# LoggingClient
php -d extension=grpc.so -d extension=protobuf.so Logging/LoggingClientGRPC.php 20 40
php -d extension=protobuf.so Logging/LoggingClientREST.php 20 40
php -d extension=grpc.so -d extension=protobuf.so Logging/LoggingClientCrossTests.php 40 80


