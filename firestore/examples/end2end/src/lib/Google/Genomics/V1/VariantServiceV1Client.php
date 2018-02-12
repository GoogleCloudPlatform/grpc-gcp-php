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
class VariantServiceV1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates variant data by asynchronously importing the provided information.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * The variants for import will be merged with any existing variant that
     * matches its reference sequence, start, end, reference bases, and
     * alternative bases. If no such variant exists, a new one will be created.
     *
     * When variants are merged, the call information from the new variant
     * is added to the existing variant, and Variant info fields are merged
     * as specified in
     * [infoMergeConfig][google.genomics.v1.ImportVariantsRequest.info_merge_config].
     * As a special case, for single-sample VCF files, QUAL and FILTER fields will
     * be moved to the call level; these are sometimes interpreted in a
     * call-specific context.
     * Imported VCF headers are appended to the metadata already in a variant set.
     * @param \Google\Genomics\V1\ImportVariantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ImportVariants(\Google\Genomics\V1\ImportVariantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/ImportVariants',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new variant set.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * The provided variant set must have a valid `datasetId` set - all other
     * fields are optional. Note that the `id` field will be ignored, as this is
     * assigned by the server.
     * @param \Google\Genomics\V1\CreateVariantSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateVariantSet(\Google\Genomics\V1\CreateVariantSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/CreateVariantSet',
        $argument,
        ['\Google\Genomics\V1\VariantSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Exports variant set data to an external destination.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\ExportVariantSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ExportVariantSet(\Google\Genomics\V1\ExportVariantSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/ExportVariantSet',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a variant set by ID.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\GetVariantSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVariantSet(\Google\Genomics\V1\GetVariantSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/GetVariantSet',
        $argument,
        ['\Google\Genomics\V1\VariantSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of all variant sets matching search criteria.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchVariantSets](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L49).
     * @param \Google\Genomics\V1\SearchVariantSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchVariantSets(\Google\Genomics\V1\SearchVariantSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/SearchVariantSets',
        $argument,
        ['\Google\Genomics\V1\SearchVariantSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a variant set including all variants, call sets, and calls within.
     * This is not reversible.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\DeleteVariantSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVariantSet(\Google\Genomics\V1\DeleteVariantSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/DeleteVariantSet',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a variant set using patch semantics.
     *
     * For the definitions of variant sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\UpdateVariantSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVariantSet(\Google\Genomics\V1\UpdateVariantSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/UpdateVariantSet',
        $argument,
        ['\Google\Genomics\V1\VariantSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a list of variants matching the criteria.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchVariants](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L126).
     * @param \Google\Genomics\V1\SearchVariantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchVariants(\Google\Genomics\V1\SearchVariantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/SearchVariants',
        $argument,
        ['\Google\Genomics\V1\SearchVariantsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new variant.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\CreateVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateVariant(\Google\Genomics\V1\CreateVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/CreateVariant',
        $argument,
        ['\Google\Genomics\V1\Variant', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a variant.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * This method supports patch semantics. Returns the modified variant without
     * its calls.
     * @param \Google\Genomics\V1\UpdateVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVariant(\Google\Genomics\V1\UpdateVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/UpdateVariant',
        $argument,
        ['\Google\Genomics\V1\Variant', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a variant.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\DeleteVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVariant(\Google\Genomics\V1\DeleteVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/DeleteVariant',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a variant by ID.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\GetVariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVariant(\Google\Genomics\V1\GetVariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/GetVariant',
        $argument,
        ['\Google\Genomics\V1\Variant', 'decode'],
        $metadata, $options);
    }

    /**
     * Merges the given variants with existing variants.
     *
     * For the definitions of variants and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Each variant will be
     * merged with an existing variant that matches its reference sequence,
     * start, end, reference bases, and alternative bases. If no such variant
     * exists, a new one will be created.
     *
     * When variants are merged, the call information from the new variant
     * is added to the existing variant. Variant info fields are merged as
     * specified in the
     * [infoMergeConfig][google.genomics.v1.MergeVariantsRequest.info_merge_config]
     * field of the MergeVariantsRequest.
     *
     * Please exercise caution when using this method!  It is easy to introduce
     * mistakes in existing variants and difficult to back out of them.  For
     * example,
     * suppose you were trying to merge a new variant with an existing one and
     * both
     * variants contain calls that belong to callsets with the same callset ID.
     *
     *     // Existing variant - irrelevant fields trimmed for clarity
     *     {
     *         "variantSetId": "10473108253681171589",
     *         "referenceName": "1",
     *         "start": "10582",
     *         "referenceBases": "G",
     *         "alternateBases": [
     *             "A"
     *         ],
     *         "calls": [
     *             {
     *                 "callSetId": "10473108253681171589-0",
     *                 "callSetName": "CALLSET0",
     *                 "genotype": [
     *                     0,
     *                     1
     *                 ],
     *             }
     *         ]
     *     }
     *
     *     // New variant with conflicting call information
     *     {
     *         "variantSetId": "10473108253681171589",
     *         "referenceName": "1",
     *         "start": "10582",
     *         "referenceBases": "G",
     *         "alternateBases": [
     *             "A"
     *         ],
     *         "calls": [
     *             {
     *                 "callSetId": "10473108253681171589-0",
     *                 "callSetName": "CALLSET0",
     *                 "genotype": [
     *                     1,
     *                     1
     *                 ],
     *             }
     *         ]
     *     }
     *
     * The resulting merged variant would overwrite the existing calls with those
     * from the new variant:
     *
     *     {
     *         "variantSetId": "10473108253681171589",
     *         "referenceName": "1",
     *         "start": "10582",
     *         "referenceBases": "G",
     *         "alternateBases": [
     *             "A"
     *         ],
     *         "calls": [
     *             {
     *                 "callSetId": "10473108253681171589-0",
     *                 "callSetName": "CALLSET0",
     *                 "genotype": [
     *                     1,
     *                     1
     *                 ],
     *             }
     *         ]
     *     }
     *
     * This may be the desired outcome, but it is up to the user to determine if
     * if that is indeed the case.
     * @param \Google\Genomics\V1\MergeVariantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MergeVariants(\Google\Genomics\V1\MergeVariantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/MergeVariants',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a list of call sets matching the criteria.
     *
     * For the definitions of call sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchCallSets](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/variantmethods.avdl#L178).
     * @param \Google\Genomics\V1\SearchCallSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchCallSets(\Google\Genomics\V1\SearchCallSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/SearchCallSets',
        $argument,
        ['\Google\Genomics\V1\SearchCallSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new call set.
     *
     * For the definitions of call sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\CreateCallSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateCallSet(\Google\Genomics\V1\CreateCallSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/CreateCallSet',
        $argument,
        ['\Google\Genomics\V1\CallSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a call set.
     *
     * For the definitions of call sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * This method supports patch semantics.
     * @param \Google\Genomics\V1\UpdateCallSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateCallSet(\Google\Genomics\V1\UpdateCallSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/UpdateCallSet',
        $argument,
        ['\Google\Genomics\V1\CallSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a call set.
     *
     * For the definitions of call sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\DeleteCallSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCallSet(\Google\Genomics\V1\DeleteCallSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/DeleteCallSet',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a call set by ID.
     *
     * For the definitions of call sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\GetCallSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCallSet(\Google\Genomics\V1\GetCallSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.VariantServiceV1/GetCallSet',
        $argument,
        ['\Google\Genomics\V1\CallSet', 'decode'],
        $metadata, $options);
    }

}
