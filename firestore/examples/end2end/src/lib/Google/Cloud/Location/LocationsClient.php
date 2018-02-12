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
namespace Google\Cloud\Location;

/**
 * An abstract interface that provides location-related information for
 * a service. Service-specific metadata is provided through the
 * [Location.metadata][google.cloud.location.Location.metadata] field.
 */
class LocationsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists information about the supported locations for this service.
     * @param \Google\Cloud\Location\ListLocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListLocations(\Google\Cloud\Location\ListLocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.location.Locations/ListLocations',
        $argument,
        ['\Google\Cloud\Location\ListLocationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get information about a location.
     * @param \Google\Cloud\Location\GetLocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetLocation(\Google\Cloud\Location\GetLocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.location.Locations/GetLocation',
        $argument,
        ['\Google\Cloud\Location\Location', 'decode'],
        $metadata, $options);
    }

}
