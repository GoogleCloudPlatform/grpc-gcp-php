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
namespace Google\Cloud\Functions\V1beta2;

/**
 * A service that application uses to manipulate triggers and functions.
 */
class CloudFunctionsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns a list of functions that belong to the requested project.
     * @param \Google\Cloud\Functions\V1beta2\ListFunctionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFunctions(\Google\Cloud\Functions\V1beta2\ListFunctionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/ListFunctions',
        $argument,
        ['\Google\Cloud\Functions\V1beta2\ListFunctionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a function with the given name from the requested project.
     * @param \Google\Cloud\Functions\V1beta2\GetFunctionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFunction(\Google\Cloud\Functions\V1beta2\GetFunctionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/GetFunction',
        $argument,
        ['\Google\Cloud\Functions\V1beta2\CloudFunction', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new function. If a function with the given name already exists in
     * the specified project, the long running operation will return
     * `ALREADY_EXISTS` error.
     * @param \Google\Cloud\Functions\V1beta2\CreateFunctionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateFunction(\Google\Cloud\Functions\V1beta2\CreateFunctionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/CreateFunction',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates existing function.
     * @param \Google\Cloud\Functions\V1beta2\UpdateFunctionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFunction(\Google\Cloud\Functions\V1beta2\UpdateFunctionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/UpdateFunction',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a function with the given name from the specified project. If the
     * given function is used by some trigger, the trigger will be updated to
     * remove this function.
     * @param \Google\Cloud\Functions\V1beta2\DeleteFunctionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteFunction(\Google\Cloud\Functions\V1beta2\DeleteFunctionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/DeleteFunction',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Invokes synchronously deployed function. To be used for testing, very
     * limited traffic allowed.
     * @param \Google\Cloud\Functions\V1beta2\CallFunctionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CallFunction(\Google\Cloud\Functions\V1beta2\CallFunctionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.functions.v1beta2.CloudFunctionsService/CallFunction',
        $argument,
        ['\Google\Cloud\Functions\V1beta2\CallFunctionResponse', 'decode'],
        $metadata, $options);
    }

}
