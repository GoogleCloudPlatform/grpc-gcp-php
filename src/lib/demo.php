<?php

enable_grpc_php(protobuf_load("file/path"));
// old way:
// $stub = new Grpc\BaseStub($hostname, $opts, $channel);
// new way
Use GrpcExtension\BaseStub as BaseStub;
$stub = new BaseStub($hostname, $opts, $channel);
$sever_steaming_call = $stub->_serverStreamRequest($method, $argument, $deserialize, array $metadata = [], array $options = []);
Assert($sever_steaming_call->getStatus());
