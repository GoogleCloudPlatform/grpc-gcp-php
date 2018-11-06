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
 * The action cache API is used to query whether a given action has already been
 * performed and, if so, retrieve its result. Unlike the
 * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage],
 * which addresses blobs by their own content, the action cache addresses the
 * [ActionResult][google.devtools.remoteexecution.v1test.ActionResult] by a
 * digest of the encoded [Action][google.devtools.remoteexecution.v1test.Action]
 * which produced them.
 *
 * The lifetime of entries in the action cache is implementation-specific, but
 * the server SHOULD assume that more recently used entries are more likely to
 * be used again. Additionally, action cache implementations SHOULD ensure that
 * any blobs referenced in the
 * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage]
 * are still valid when returning a result.
 *
 * As with other services in the Remote Execution API, any call may return an
 * error with a [RetryInfo][google.rpc.RetryInfo] error detail providing
 * information about when the client should retry the request; clients SHOULD
 * respect the information provided.
 */
class ActionCacheClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieve a cached execution result.
     *
     * Errors:
     * * `NOT_FOUND`: The requested `ActionResult` is not in the cache.
     * @param \Google\Devtools\Remoteexecution\V1test\GetActionResultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetActionResult(\Google\Devtools\Remoteexecution\V1test\GetActionResultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteexecution.v1test.ActionCache/GetActionResult',
        $argument,
        ['\Google\Devtools\Remoteexecution\V1test\ActionResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Upload a new execution result.
     *
     * This method is intended for servers which implement the distributed cache
     * independently of the
     * [Execution][google.devtools.remoteexecution.v1test.Execution] API. As a
     * result, it is OPTIONAL for servers to implement.
     *
     * Errors:
     * * `NOT_IMPLEMENTED`: This method is not supported by the server.
     * * `RESOURCE_EXHAUSTED`: There is insufficient storage space to add the
     *   entry to the cache.
     * @param \Google\Devtools\Remoteexecution\V1test\UpdateActionResultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateActionResult(\Google\Devtools\Remoteexecution\V1test\UpdateActionResultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteexecution.v1test.ActionCache/UpdateActionResult',
        $argument,
        ['\Google\Devtools\Remoteexecution\V1test\ActionResult', 'decode'],
        $metadata, $options);
    }

}
