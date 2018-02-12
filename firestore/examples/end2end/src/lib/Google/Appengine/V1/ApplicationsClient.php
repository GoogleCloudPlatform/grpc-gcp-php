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
 * Manages App Engine applications.
 */
class ApplicationsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Gets information about an application.
     * @param \Google\Appengine\V1\GetApplicationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetApplication(\Google\Appengine\V1\GetApplicationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Applications/GetApplication',
        $argument,
        ['\Google\Appengine\V1\Application', 'decode'],
        $metadata, $options);
    }

    /**
     * Recreates the required App Engine features for the application in your
     * project, for example a Cloud Storage bucket or App Engine service account.
     * Use this method if you receive an error message about a missing feature,
     * for example "*Error retrieving the App Engine service account*".
     * @param \Google\Appengine\V1\RepairApplicationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RepairApplication(\Google\Appengine\V1\RepairApplicationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.appengine.v1.Applications/RepairApplication',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
