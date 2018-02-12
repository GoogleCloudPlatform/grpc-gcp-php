<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Appengine\V1;

/**
 * Manages instances of a version.
 */
class InstancesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the instances of a version.
     * @param \Google\Appengine\V1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Google\Appengine\V1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Instances/ListInstances',
        $argument,
        ['\Google\Appengine\V1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets instance information.
     * @param \Google\Appengine\V1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInstance(\Google\Appengine\V1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Instances/GetInstance',
        $argument,
        ['\Google\Appengine\V1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Stops a running instance.
     * @param \Google\Appengine\V1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstance(\Google\Appengine\V1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Instances/DeleteInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Enables debugging on a VM instance. This allows you to use the SSH
     * command to connect to the virtual machine where the instance lives.
     * While in "debug mode", the instance continues to serve live traffic.
     * You should delete the instance when you are done debugging and then
     * allow the system to take over and determine if another instance
     * should be started.
     *
     * Only applicable for instances in App Engine flexible environment.
     * @param \Google\Appengine\V1\DebugInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DebugInstance(\Google\Appengine\V1\DebugInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Instances/DebugInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
