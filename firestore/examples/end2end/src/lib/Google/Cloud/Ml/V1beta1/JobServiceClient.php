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
namespace Google\Cloud\Ml\V1beta1;

/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Proto file for the Google Cloud Machine Learning Engine.
 * Describes the 'job service' to manage training and prediction jobs.
 *
 * Service to create and manage training and batch prediction jobs.
 */
class JobServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a training or a batch prediction job.
     * @param \Google\Cloud\Ml\V1beta1\CreateJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateJob(\Google\Cloud\Ml\V1beta1\CreateJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1beta1.JobService/CreateJob',
        $argument,
        ['\Google\Cloud\Ml\V1beta1\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the jobs in the project.
     * @param \Google\Cloud\Ml\V1beta1\ListJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListJobs(\Google\Cloud\Ml\V1beta1\ListJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1beta1.JobService/ListJobs',
        $argument,
        ['\Google\Cloud\Ml\V1beta1\ListJobsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Describes a job.
     * @param \Google\Cloud\Ml\V1beta1\GetJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetJob(\Google\Cloud\Ml\V1beta1\GetJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1beta1.JobService/GetJob',
        $argument,
        ['\Google\Cloud\Ml\V1beta1\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancels a running job.
     * @param \Google\Cloud\Ml\V1beta1\CancelJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelJob(\Google\Cloud\Ml\V1beta1\CancelJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1beta1.JobService/CancelJob',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
