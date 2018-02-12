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
namespace Google\Genomics\V1;

/**
 */
class ReferenceServiceV1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Searches for reference sets which match the given criteria.
     *
     * For the definitions of references and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchReferenceSets](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L71)
     * @param \Google\Genomics\V1\SearchReferenceSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchReferenceSets(\Google\Genomics\V1\SearchReferenceSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReferenceServiceV1/SearchReferenceSets',
        $argument,
        ['\Google\Genomics\V1\SearchReferenceSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a reference set.
     *
     * For the definitions of references and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.getReferenceSet](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L83).
     * @param \Google\Genomics\V1\GetReferenceSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetReferenceSet(\Google\Genomics\V1\GetReferenceSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReferenceServiceV1/GetReferenceSet',
        $argument,
        ['\Google\Genomics\V1\ReferenceSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for references which match the given criteria.
     *
     * For the definitions of references and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchReferences](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L146).
     * @param \Google\Genomics\V1\SearchReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchReferences(\Google\Genomics\V1\SearchReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReferenceServiceV1/SearchReferences',
        $argument,
        ['\Google\Genomics\V1\SearchReferencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a reference.
     *
     * For the definitions of references and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.getReference](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L158).
     * @param \Google\Genomics\V1\GetReferenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetReference(\Google\Genomics\V1\GetReferenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReferenceServiceV1/GetReference',
        $argument,
        ['\Google\Genomics\V1\Reference', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the bases in a reference, optionally restricted to a range.
     *
     * For the definitions of references and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.getReferenceBases](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/referencemethods.avdl#L221).
     * @param \Google\Genomics\V1\ListBasesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListBases(\Google\Genomics\V1\ListBasesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReferenceServiceV1/ListBases',
        $argument,
        ['\Google\Genomics\V1\ListBasesResponse', 'decode'],
        $metadata, $options);
    }

}
