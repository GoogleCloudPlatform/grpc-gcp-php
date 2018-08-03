#!/bin/bash
protoc --proto_path=./../src/ --php_out=./generated/ \
  --grpc_out=./generated/ \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin \
  ./../src/grpc_gcp.proto
