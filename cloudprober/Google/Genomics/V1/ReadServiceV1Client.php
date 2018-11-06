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
 * The Readstore. A data store for DNA sequencing Reads.
 */
class ReadServiceV1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates read group sets by asynchronously importing the provided
     * information.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * The caller must have WRITE permissions to the dataset.
     *
     * ## Notes on [BAM](https://samtools.github.io/hts-specs/SAMv1.pdf) import
     *
     * - Tags will be converted to strings - tag types are not preserved
     * - Comments (`@CO`) in the input file header will not be preserved
     * - Original header order of references (`@SQ`) will not be preserved
     * - Any reverse stranded unmapped reads will be reverse complemented, and
     * their qualities (also the "BQ" and "OQ" tags, if any) will be reversed
     * - Unmapped reads will be stripped of positional information (reference name
     * and position)
     * @param \Google\Genomics\V1\ImportReadGroupSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ImportReadGroupSets(\Google\Genomics\V1\ImportReadGroupSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/ImportReadGroupSets',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Exports a read group set to a BAM file in Google Cloud Storage.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Note that currently there may be some differences between exported BAM
     * files and the original BAM file at the time of import. See
     * [ImportReadGroupSets][google.genomics.v1.ReadServiceV1.ImportReadGroupSets]
     * for caveats.
     * @param \Google\Genomics\V1\ExportReadGroupSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ExportReadGroupSet(\Google\Genomics\V1\ExportReadGroupSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/ExportReadGroupSet',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for read group sets matching the criteria.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Implements
     * [GlobalAllianceApi.searchReadGroupSets](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/readmethods.avdl#L135).
     * @param \Google\Genomics\V1\SearchReadGroupSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchReadGroupSets(\Google\Genomics\V1\SearchReadGroupSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/SearchReadGroupSets',
        $argument,
        ['\Google\Genomics\V1\SearchReadGroupSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a read group set.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * This method supports patch semantics.
     * @param \Google\Genomics\V1\UpdateReadGroupSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateReadGroupSet(\Google\Genomics\V1\UpdateReadGroupSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/UpdateReadGroupSet',
        $argument,
        ['\Google\Genomics\V1\ReadGroupSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a read group set.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\DeleteReadGroupSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteReadGroupSet(\Google\Genomics\V1\DeleteReadGroupSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/DeleteReadGroupSet',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a read group set by ID.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\GetReadGroupSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetReadGroupSet(\Google\Genomics\V1\GetReadGroupSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/GetReadGroupSet',
        $argument,
        ['\Google\Genomics\V1\ReadGroupSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists fixed width coverage buckets for a read group set, each of which
     * correspond to a range of a reference sequence. Each bucket summarizes
     * coverage information across its corresponding genomic range.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Coverage is defined as the number of reads which are aligned to a given
     * base in the reference sequence. Coverage buckets are available at several
     * precomputed bucket widths, enabling retrieval of various coverage 'zoom
     * levels'. The caller must have READ permissions for the target read group
     * set.
     * @param \Google\Genomics\V1\ListCoverageBucketsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCoverageBuckets(\Google\Genomics\V1\ListCoverageBucketsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/ListCoverageBuckets',
        $argument,
        ['\Google\Genomics\V1\ListCoverageBucketsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a list of reads for one or more read group sets.
     *
     * For the definitions of read group sets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * Reads search operates over a genomic coordinate space of reference sequence
     * & position defined over the reference sequences to which the requested
     * read group sets are aligned.
     *
     * If a target positional range is specified, search returns all reads whose
     * alignment to the reference genome overlap the range. A query which
     * specifies only read group set IDs yields all reads in those read group
     * sets, including unmapped reads.
     *
     * All reads returned (including reads on subsequent pages) are ordered by
     * genomic coordinate (by reference sequence, then position). Reads with
     * equivalent genomic coordinates are returned in an unspecified order. This
     * order is consistent, such that two queries for the same content (regardless
     * of page size) yield reads in the same order across their respective streams
     * of paginated responses.
     *
     * Implements
     * [GlobalAllianceApi.searchReads](https://github.com/ga4gh/schemas/blob/v0.5.1/src/main/resources/avro/readmethods.avdl#L85).
     * @param \Google\Genomics\V1\SearchReadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchReads(\Google\Genomics\V1\SearchReadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.ReadServiceV1/SearchReads',
        $argument,
        ['\Google\Genomics\V1\SearchReadsResponse', 'decode'],
        $metadata, $options);
    }

}
