<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google Inc.
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
namespace Google\Cloud\Websecurityscanner\V1alpha;

/**
 * Cloud Web Security Scanner Service identifies security vulnerabilities in web
 * applications hosted on Google Cloud Platform. It crawls your application, and
 * attempts to exercise as many user inputs and event handlers as possible.
 */
class WebSecurityScannerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new ScanConfig.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\CreateScanConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateScanConfig(\Google\Cloud\Websecurityscanner\V1alpha\CreateScanConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/CreateScanConfig',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an existing ScanConfig and its child resources.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\DeleteScanConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteScanConfig(\Google\Cloud\Websecurityscanner\V1alpha\DeleteScanConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/DeleteScanConfig',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a ScanConfig.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\GetScanConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetScanConfig(\Google\Cloud\Websecurityscanner\V1alpha\GetScanConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/GetScanConfig',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists ScanConfigs under a given project.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ListScanConfigsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListScanConfigs(\Google\Cloud\Websecurityscanner\V1alpha\ListScanConfigsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/ListScanConfigs',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ListScanConfigsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a ScanConfig. This method support partial update of a ScanConfig.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\UpdateScanConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateScanConfig(\Google\Cloud\Websecurityscanner\V1alpha\UpdateScanConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/UpdateScanConfig',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Start a ScanRun according to the given ScanConfig.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\StartScanRunRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StartScanRun(\Google\Cloud\Websecurityscanner\V1alpha\StartScanRunRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/StartScanRun',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanRun', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a ScanRun.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\GetScanRunRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetScanRun(\Google\Cloud\Websecurityscanner\V1alpha\GetScanRunRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/GetScanRun',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanRun', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists ScanRuns under a given ScanConfig, in descending order of ScanRun
     * stop time.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ListScanRunsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListScanRuns(\Google\Cloud\Websecurityscanner\V1alpha\ListScanRunsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/ListScanRuns',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ListScanRunsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Stops a ScanRun. The stopped ScanRun is returned.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\StopScanRunRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StopScanRun(\Google\Cloud\Websecurityscanner\V1alpha\StopScanRunRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/StopScanRun',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ScanRun', 'decode'],
        $metadata, $options);
    }

    /**
     * List CrawledUrls under a given ScanRun.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ListCrawledUrlsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCrawledUrls(\Google\Cloud\Websecurityscanner\V1alpha\ListCrawledUrlsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/ListCrawledUrls',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ListCrawledUrlsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a Finding.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\GetFindingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFinding(\Google\Cloud\Websecurityscanner\V1alpha\GetFindingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/GetFinding',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\Finding', 'decode'],
        $metadata, $options);
    }

    /**
     * List Findings under a given ScanRun.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ListFindingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFindings(\Google\Cloud\Websecurityscanner\V1alpha\ListFindingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/ListFindings',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ListFindingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all FindingTypeStats under a given ScanRun.
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ListFindingTypeStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFindingTypeStats(\Google\Cloud\Websecurityscanner\V1alpha\ListFindingTypeStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.websecurityscanner.v1alpha.WebSecurityScanner/ListFindingTypeStats',
        $argument,
        ['\Google\Cloud\Websecurityscanner\V1alpha\ListFindingTypeStatsResponse', 'decode'],
        $metadata, $options);
    }

}
