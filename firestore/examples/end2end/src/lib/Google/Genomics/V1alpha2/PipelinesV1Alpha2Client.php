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
namespace Google\Genomics\V1alpha2;

/**
 * A service for running genomics pipelines.
 */
class PipelinesV1Alpha2Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a pipeline that can be run later. Create takes a Pipeline that
     * has all fields other than `pipelineId` populated, and then returns
     * the same pipeline with `pipelineId` populated. This id can be used
     * to run the pipeline.
     *
     * Caller must have WRITE permission to the project.
     * @param \Google\Genomics\V1alpha2\CreatePipelineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreatePipeline(\Google\Genomics\V1alpha2\CreatePipelineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/CreatePipeline',
        $argument,
        ['\Google\Genomics\V1alpha2\Pipeline', 'decode'],
        $metadata, $options);
    }

    /**
     * Runs a pipeline. If `pipelineId` is specified in the request, then
     * run a saved pipeline. If `ephemeralPipeline` is specified, then run
     * that pipeline once without saving a copy.
     *
     * The caller must have READ permission to the project where the pipeline
     * is stored and WRITE permission to the project where the pipeline will be
     * run, as VMs will be created and storage will be used.
     * @param \Google\Genomics\V1alpha2\RunPipelineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RunPipeline(\Google\Genomics\V1alpha2\RunPipelineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/RunPipeline',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a pipeline based on ID.
     *
     * Caller must have READ permission to the project.
     * @param \Google\Genomics\V1alpha2\GetPipelineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPipeline(\Google\Genomics\V1alpha2\GetPipelineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/GetPipeline',
        $argument,
        ['\Google\Genomics\V1alpha2\Pipeline', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists pipelines.
     *
     * Caller must have READ permission to the project.
     * @param \Google\Genomics\V1alpha2\ListPipelinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPipelines(\Google\Genomics\V1alpha2\ListPipelinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/ListPipelines',
        $argument,
        ['\Google\Genomics\V1alpha2\ListPipelinesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a pipeline based on ID.
     *
     * Caller must have WRITE permission to the project.
     * @param \Google\Genomics\V1alpha2\DeletePipelineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeletePipeline(\Google\Genomics\V1alpha2\DeletePipelineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/DeletePipeline',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets controller configuration information. Should only be called
     * by VMs created by the Pipelines Service and not by end users.
     * @param \Google\Genomics\V1alpha2\GetControllerConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetControllerConfig(\Google\Genomics\V1alpha2\GetControllerConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/GetControllerConfig',
        $argument,
        ['\Google\Genomics\V1alpha2\ControllerConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets status of a given operation. Any new timestamps (as determined by
     * description) are appended to TimestampEvents. Should only be called by VMs
     * created by the Pipelines Service and not by end users.
     * @param \Google\Genomics\V1alpha2\SetOperationStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetOperationStatus(\Google\Genomics\V1alpha2\SetOperationStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1alpha2.PipelinesV1Alpha2/SetOperationStatus',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
