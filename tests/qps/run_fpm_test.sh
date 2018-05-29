#!/bin/bash

# LoggingClient
for i in {1..100}
do
  curl -I localhost/logging_rest.php
  curl -I localhost/logging_grpc.php
done
