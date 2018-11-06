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
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
// implied. See the License for the specific language governing
// permissions and limitations under the License.
//
// Proto file describing the Ad Group service.
namespace Google\Ads\GoogleAds\V0\Services;

/**
 * Service to manage ad groups.
 */
class AdGroupServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested ad group in full detail.
     * @param \Google\Ads\GoogleAds\V0\Services\GetAdGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAdGroup(\Google\Ads\GoogleAds\V0\Services\GetAdGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v0.services.AdGroupService/GetAdGroup',
        $argument,
        ['\Google\Ads\GoogleAds\V0\Resources\AdGroup', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates, updates, or removes ad groups. Operation statuses are returned.
     * @param \Google\Ads\GoogleAds\V0\Services\MutateAdGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MutateAdGroups(\Google\Ads\GoogleAds\V0\Services\MutateAdGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v0.services.AdGroupService/MutateAdGroups',
        $argument,
        ['\Google\Ads\GoogleAds\V0\Services\MutateAdGroupsResponse', 'decode'],
        $metadata, $options);
    }

}
