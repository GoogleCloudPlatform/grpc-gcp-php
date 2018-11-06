<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC
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
namespace Google\Devtools\Remoteworkers\V1test2;

/**
 * DEPRECATED. GetTask should be replaced by Lease.payload, UpdateTaskResult by
 * Lease.result and logs should be precreated prior to sending to the bot (eg,
 * via CommandTask.expected_outputs.stdout_destination).
 */
class TasksClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * DEPRECATED - use Lease.payload instead.
     * GetTask reads the current state of the task. Tasks must be created through
     * some other interface, and should be immutable once created and exposed to
     * the bots.
     * @param \Google\Devtools\Remoteworkers\V1test2\GetTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTask(\Google\Devtools\Remoteworkers\V1test2\GetTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Tasks/GetTask',
        $argument,
        ['\Google\Devtools\Remoteworkers\V1test2\Task', 'decode'],
        $metadata, $options);
    }

    /**
     * DEPRECATED - use Lease.result instead.
     * UpdateTaskResult updates the result.
     * @param \Google\Devtools\Remoteworkers\V1test2\UpdateTaskResultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateTaskResult(\Google\Devtools\Remoteworkers\V1test2\UpdateTaskResultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Tasks/UpdateTaskResult',
        $argument,
        ['\Google\Devtools\Remoteworkers\V1test2\TaskResult', 'decode'],
        $metadata, $options);
    }

    /**
     * DEPRECATED - precreate logs prior to sending to bot.
     * AddTaskLog creates a new streaming log. The log is streamed and marked as
     * completed through other interfaces (i.e., ByteStream). This can be called
     * by the bot if it wants to create a new log; the server can also predefine
     * logs that do not need to be created (e.g. `stdout`).
     * @param \Google\Devtools\Remoteworkers\V1test2\AddTaskLogRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddTaskLog(\Google\Devtools\Remoteworkers\V1test2\AddTaskLogRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Tasks/AddTaskLog',
        $argument,
        ['\Google\Devtools\Remoteworkers\V1test2\AddTaskLogResponse', 'decode'],
        $metadata, $options);
    }

}
