#!/bin/bash
protoc --proto_path=./ --php_out=./ --grpc_out=./ \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin ./my_echo.proto

