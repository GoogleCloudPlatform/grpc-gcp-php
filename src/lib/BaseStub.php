<?php

namespace GrpcExtension;

class BaseStub
{
    private $channels;

    public function __construct($hostname, $opts, \GrpcExtension\Channel $channel = null)
    {
        $opts = [$opts, GLOBALS['config']];
        $this->channels = new \GrpcExtension\Channel($hostname, $opts);
    }


    protected function _serverStreamRequest($method,
                                         $argument,
                                         $deserialize,
                                         array $metadata = [],
                                         array $options = [])
    {
        $create_real_call_func = function($real_channel, $method, $deserialize, $options, $pre_process_func) {
            $channel_ref = $pre_process_func($this->channels, $method);
            $stub = new \Grpc\BaseStub($hostname, $options, $real_channel);
            $real_call = $stub->_serverStreamRequest($real_channel, $method, $deserialize, $options);
            return $real_call;
        }
        $call = new GrpcExtension\ServerStreamingCall($create_real_call_func, $stub, $real_channel, $method, $deserialize, $options);
        return $call;
    }

}