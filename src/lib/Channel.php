<?php

namespace GrpcExtension;

require \Grpc\Channel;

// There is no private class in PHP.
class Channel
{
    private $max_size;
    private $max_concurrent_streams_low_watermark;
    private $target;
    private $options;
    private credentials;
    private affinity_by_method = array();
    private $affinity_key_to_channel = array();
    private $channel_refs = array();

    public function __construct()
    {
        $config = $GLOBALS['config'];

    }

    public function bind() {

    }

    public function unbind() {

    }

    public function getChannelRef($method) {
        $channel_ref = get_channel_ref($method);
        return $channel_ref;
    }

    public function getTarget(){}

    private function connectivityFunc($func, $args = null) {
        $ready = 0;
        $idle = 0
        $connecting = 0
        $transient_failure = 0
        $shutdown = 0
        for($channel_ref as $this->channel_refs) {
            switch ($channel_ref->$func($args)) {
                case \Grpc\CHANNEL_READY:
                    $ready += 1;
                case \Grpc\CHANNEL_SHUTDOWN:
                    $shutdown += 1;
                case \Grpc\CHANNEL_CONNECTING:
                    $connecting += 1;
                case \Grpc\CHANNEL_TRANSIENT_FAILURE:
                    $transient_failure += 1;
                case \Grpc\CHANNEL_IDLE:
                    $idle += 1;
            }
        }
        if ($ready > 0) {
            return \Grpc\CHANNEL_READY;
        } else if ($idle > 0) {
            return \Grpc\CHANNEL_IDLE;
        } else if ($connecting > 0) {
            return \Grpc\CHANNEL_CONNECTING;
        } else if ($transient_failure > 0) {
            return \Grpc\CHANNEL_TRANSIENT_FAILURE;
        } else if ($shutdown > 0) {
            return \Grpc\CHANNEL_SHUTDOWN;
        }
    }

    public function getConnectivityState($try_to_connect) {
        return $this->connectivityFunc('getConnectivityState', $try_to_connect);
    }

    public function watchConnectivityState() {
        return $this->connectivityFunc('watchConnectivityState');
    }

    public function getTarget() {
        return $this->target;
    }

}

class ChannelRef
{
    private $real_channel;
    private $channel_id;
    private $affinity_ref;
    private $active_stream_ref;
    public function __construct($channel, $channel_id, $affinity_ref=0, $active_stream_ref=0)
    {
        $this->real_channel = $channel;
        $this->channel_id = $channel_id;
        $this->affinity_ref = $affinity_ref;
        $this->active_stream_ref = $active_stream_ref;
    }

    public function getRealChannel() {return $this->real_channel};
    public function getAffinityRef() {return $this->affinity_ref};
    public function getActiveStreamRef() {return $this->active_stream_ref};
    public function affinityRefIncr() {$this->affinity_ref += 1;}
    public function affinityRefDecr() {$this->affinity_ref -= 1;}
    public function activeStreamRefIncr() {$this->active_stream_ref += 1;}
    public function activeStreamRefDecr() {$this->active_stream_ref -= 1;}
}
