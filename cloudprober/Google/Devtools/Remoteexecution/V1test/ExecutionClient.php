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
namespace Google\Devtools\Remoteexecution\V1test;

/**
 * The Remote Execution API is used to execute an
 * [Action][google.devtools.remoteexecution.v1test.Action] on the remote
 * workers.
 *
 * As with other services in the Remote Execution API, any call may return an
 * error with a [RetryInfo][google.rpc.RetryInfo] error detail providing
 * information about when the client should retry the request; clients SHOULD
 * respect the information provided.
 */
class ExecutionClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Execute an action remotely.
     *
     * In order to execute an action, the client must first upload all of the
     * inputs, as well as the
     * [Command][google.devtools.remoteexecution.v1test.Command] to run, into the
     * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage].
     * It then calls `Execute` with an
     * [Action][google.devtools.remoteexecution.v1test.Action] referring to them.
     * The server will run the action and eventually return the result.
     *
     * The input `Action`'s fields MUST meet the various canonicalization
     * requirements specified in the documentation for their types so that it has
     * the same digest as other logically equivalent `Action`s. The server MAY
     * enforce the requirements and return errors if a non-canonical input is
     * received. It MAY also proceed without verifying some or all of the
     * requirements, such as for performance reasons. If the server does not
     * verify the requirement, then it will treat the `Action` as distinct from
     * another logically equivalent action if they hash differently.
     *
     * Returns a [google.longrunning.Operation][google.longrunning.Operation]
     * describing the resulting execution, with eventual `response`
     * [ExecuteResponse][google.devtools.remoteexecution.v1test.ExecuteResponse].
     * The `metadata` on the operation is of type
     * [ExecuteOperationMetadata][google.devtools.remoteexecution.v1test.ExecuteOperationMetadata].
     *
     * To query the operation, you can use the
     * [Operations API][google.longrunning.Operations.GetOperation]. If you wish
     * to allow the server to stream operations updates, rather than requiring
     * client polling, you can use the
     * [Watcher API][google.watcher.v1.Watcher.Watch] with the Operation's `name`
     * as the `target`.
     *
     * When using the Watcher API, the initial `data` will be the `Operation` at
     * the time of the request. Updates will be provided periodically by the
     * server until the `Operation` completes, at which point the response message
     * will (assuming no error) be at `data.response`.
     *
     * The server NEED NOT implement other methods or functionality of the
     * Operation and Watcher APIs.
     *
     * Errors discovered during creation of the `Operation` will be reported
     * as gRPC Status errors, while errors that occurred while running the
     * action will be reported in the `status` field of the `ExecuteResponse`. The
     * server MUST NOT set the `error` field of the `Operation` proto.
     * The possible errors include:
     * * `INVALID_ARGUMENT`: One or more arguments are invalid.
     * * `FAILED_PRECONDITION`: One or more errors occurred in setting up the
     *   action requested, such as a missing input or command or no worker being
     *   available. The client may be able to fix the errors and retry.
     * * `RESOURCE_EXHAUSTED`: There is insufficient quota of some resource to run
     *   the action.
     * * `UNAVAILABLE`: Due to a transient condition, such as all workers being
     *   occupied (and the server does not support a queue), the action could not
     *   be started. The client should retry.
     * * `INTERNAL`: An internal error occurred in the execution engine or the
     *   worker.
     * * `DEADLINE_EXCEEDED`: The execution timed out.
     *
     * In the case of a missing input or command, the server SHOULD additionally
     * send a [PreconditionFailure][google.rpc.PreconditionFailure] error detail
     * where, for each requested blob not present in the CAS, there is a
     * `Violation` with a `type` of `MISSING` and a `subject` of
     * `"blobs/{hash}/{size}"` indicating the digest of the missing blob.
     * @param \Google\Devtools\Remoteexecution\V1test\ExecuteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Execute(\Google\Devtools\Remoteexecution\V1test\ExecuteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteexecution.v1test.Execution/Execute',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
