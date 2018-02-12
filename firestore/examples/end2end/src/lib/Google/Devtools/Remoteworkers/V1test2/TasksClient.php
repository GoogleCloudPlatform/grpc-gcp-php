<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
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
 * Design doc: https://goo.gl/oojM5H
 *
 * The Tasks interface defines tasks to execute and the results of these tasks.
 * It does not include the metadata surrounding tasks; that is, the Task message
 * represents *what* to be executed and *what* was the result of that execution,
 * but not *how* to execute that task. For example this interface does not
 * explain what platform the task should be run on, what priority it may have in
 * any queue, etc.
 *
 * NB: we are not using google.rpc.batch since that's designed specifically for
 * batch execution of RPC methods, and so is semantically quite different from
 * our more general concept (though an RPC method could certainly be described
 * by a Task in this interface).
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
