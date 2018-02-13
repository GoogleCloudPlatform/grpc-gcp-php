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
namespace Google\Bigtable\V1;

/**
 * Service for reading from and writing to existing Bigtables.
 */
class BigtableServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Streams back the contents of all requested rows, optionally applying
     * the same Reader filter to each. Depending on their size, rows may be
     * broken up across multiple responses, but atomicity of each row will still
     * be preserved.
     * @param \Google\Bigtable\V1\ReadRowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadRows(\Google\Bigtable\V1\ReadRowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/google.bigtable.v1.BigtableService/ReadRows',
        $argument,
        ['\Google\Bigtable\V1\ReadRowsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a sample of row keys in the table. The returned row keys will
     * delimit contiguous sections of the table of approximately equal size,
     * which can be used to break up the data for distributed tasks like
     * mapreduces.
     * @param \Google\Bigtable\V1\SampleRowKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SampleRowKeys(\Google\Bigtable\V1\SampleRowKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/google.bigtable.v1.BigtableService/SampleRowKeys',
        $argument,
        ['\Google\Bigtable\V1\SampleRowKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Mutates a row atomically. Cells already present in the row are left
     * unchanged unless explicitly changed by 'mutation'.
     * @param \Google\Bigtable\V1\MutateRowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MutateRow(\Google\Bigtable\V1\MutateRowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.v1.BigtableService/MutateRow',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Mutates multiple rows in a batch. Each individual row is mutated
     * atomically as in MutateRow, but the entire batch is not executed
     * atomically.
     * @param \Google\Bigtable\V1\MutateRowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MutateRows(\Google\Bigtable\V1\MutateRowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.v1.BigtableService/MutateRows',
        $argument,
        ['\Google\Bigtable\V1\MutateRowsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Mutates a row atomically based on the output of a predicate Reader filter.
     * @param \Google\Bigtable\V1\CheckAndMutateRowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckAndMutateRow(\Google\Bigtable\V1\CheckAndMutateRowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.v1.BigtableService/CheckAndMutateRow',
        $argument,
        ['\Google\Bigtable\V1\CheckAndMutateRowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Modifies a row atomically, reading the latest existing timestamp/value from
     * the specified columns and writing a new value at
     * max(existing timestamp, current server time) based on pre-defined
     * read/modify/write rules. Returns the new contents of all modified cells.
     * @param \Google\Bigtable\V1\ReadModifyWriteRowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadModifyWriteRow(\Google\Bigtable\V1\ReadModifyWriteRowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.v1.BigtableService/ReadModifyWriteRow',
        $argument,
        ['\Google\Bigtable\V1\Row', 'decode'],
        $metadata, $options);
    }

}
