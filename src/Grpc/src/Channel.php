<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Grpc;

/**
 * Class Channel.
 * @package Grpc
 */
class Channel
{
    protected $mh;
    protected $curl_opts;
    // Although array in php is used as map, key can't be assign with object($ch).
    protected $registered_ch;
    protected $is_ch_finish;

    public function getMh() {
        return $this->mh;
    }

    public function getCurlOpts() {
        return $this->curl_opts;
    }
    /**
     * Construct an instance of the Channel class. If the $args array contains a
     * "credentials" key mapping to a ChannelCredentials object, a secure channel
     * will be created with those credentials.
     *
     * @param string $target The hostname to associate with this channel
     * @param array  $args   The arguments to pass to the Channel (optional)
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($target, $args = array()) {
        $this->mh = curl_multi_init();
        curl_multi_setopt($this->mh, CURLMOPT_PIPELINING, 100);
        curl_multi_setopt($this->mh, CURLMOPT_MAXCONNECTS, 100);
        $this->registered_ch = array();
        //TODO: transfer $args to $curl_opts
    }

    public function register_ch($ch){
        array_push($this->registered_ch, $ch);
    }

    // TODO: change is_ch_finished and unregister_ch to a faster way.
    public function is_ch_finished($ch){
        // If a ch is finished, it is removed from the registered array.
        if(in_array($ch, $this->registered_ch)){
            return false;
        }
        return true;
    }

    public function unregister_ch($ch){
        $pos = array_search($ch, $this->registered_ch);
        unset($this->registered_ch[$pos]);
    }

    /*
     * TODO: support grpc API
     * public function getTarget() {}
     * public function getConnectivityState($try_to_connect = false) {}
     * public function watchConnectivityState($last_state, Timeval $deadline_obj) {}
     * public function close() {}
     */
}
