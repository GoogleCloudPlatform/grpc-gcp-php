#!/bin/bash

php -d extension=grpc.so -d extension=protobuf.so Logging/LoggingClient.php
