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

namespace GrpcExtension;

class ServerStreamingCall
{
    private $call;
    private $ext_channel;
    private $channel_ref;
    private $method;

    private function preProcess($ext_channel, $method){
        $this->channel_ref = $ext_channel->getChannelRef($method);
        return $this->channel_ref->getRealChannel();
    }

    private function postProcess() {
        if (checkbind($this->method)) {
            $this->ext_channel->bind($channel_ref, $method);
        }
        if (checkunbind($this->method)) {
            $this->ext_channel->unbind($channel_ref, $method);
        }
    }

    public function __construct($create_real_call_func, $stub, $real_channel, $method, $deserialize, $options) {
        $this->call = $create_real_call_func($stub, $real_channel, $method, $deserialize, $options, [$this, 'preProcess']);
        $this->method = $method;
    }

    public function write($data, array $options = [])
    {
        $this->call->write($data, $options);
    }

    public function getStatus()
    {
        $status = $this->call->getStatus();
        if(checkstatus($status)) {
            $this->postProcess();
        }
    }
}
