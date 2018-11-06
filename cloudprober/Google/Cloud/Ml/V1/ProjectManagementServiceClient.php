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
namespace Google\Cloud\Ml\V1;

/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Proto file for the Google Cloud Machine Learning Engine.
 * Describes the project management service.
 *
 * Allows retrieving project related information.
 */
class ProjectManagementServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get the service account information associated with your project. You need
     * this information in order to grant the service account persmissions for
     * the Google Cloud Storage location where you put your model training code
     * for training the model with Google Cloud Machine Learning.
     * @param \Google\Cloud\Ml\V1\GetConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConfig(\Google\Cloud\Ml\V1\GetConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ProjectManagementService/GetConfig',
        $argument,
        ['\Google\Cloud\Ml\V1\GetConfigResponse', 'decode'],
        $metadata, $options);
    }

}
