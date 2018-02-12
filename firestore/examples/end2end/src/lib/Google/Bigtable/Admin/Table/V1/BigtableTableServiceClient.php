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
namespace Google\Bigtable\Admin\Table\V1;

/**
 * Service for creating, configuring, and deleting Cloud Bigtable tables.
 * Provides access to the table schemas only, not the data stored within the tables.
 */
class BigtableTableServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new table, to be served from a specified cluster.
     * The table can be created with a full set of initial column families,
     * specified in the request.
     * @param \Google\Bigtable\Admin\Table\V1\CreateTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTable(\Google\Bigtable\Admin\Table\V1\CreateTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/CreateTable',
        $argument,
        ['\Google\Bigtable\Admin\Table\V1\Table', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the names of all tables served from a specified cluster.
     * @param \Google\Bigtable\Admin\Table\V1\ListTablesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTables(\Google\Bigtable\Admin\Table\V1\ListTablesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/ListTables',
        $argument,
        ['\Google\Bigtable\Admin\Table\V1\ListTablesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the schema of the specified table, including its column families.
     * @param \Google\Bigtable\Admin\Table\V1\GetTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTable(\Google\Bigtable\Admin\Table\V1\GetTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/GetTable',
        $argument,
        ['\Google\Bigtable\Admin\Table\V1\Table', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently deletes a specified table and all of its data.
     * @param \Google\Bigtable\Admin\Table\V1\DeleteTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteTable(\Google\Bigtable\Admin\Table\V1\DeleteTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/DeleteTable',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes the name of a specified table.
     * Cannot be used to move tables between clusters, zones, or projects.
     * @param \Google\Bigtable\Admin\Table\V1\RenameTableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RenameTable(\Google\Bigtable\Admin\Table\V1\RenameTableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/RenameTable',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new column family within a specified table.
     * @param \Google\Bigtable\Admin\Table\V1\CreateColumnFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateColumnFamily(\Google\Bigtable\Admin\Table\V1\CreateColumnFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/CreateColumnFamily',
        $argument,
        ['\Google\Bigtable\Admin\Table\V1\ColumnFamily', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes the configuration of a specified column family.
     * @param \Google\Bigtable\Admin\Table\V1\ColumnFamily $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateColumnFamily(\Google\Bigtable\Admin\Table\V1\ColumnFamily $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/UpdateColumnFamily',
        $argument,
        ['\Google\Bigtable\Admin\Table\V1\ColumnFamily', 'decode'],
        $metadata, $options);
    }

    /**
     * Permanently deletes a specified column family and all of its data.
     * @param \Google\Bigtable\Admin\Table\V1\DeleteColumnFamilyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteColumnFamily(\Google\Bigtable\Admin\Table\V1\DeleteColumnFamilyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/DeleteColumnFamily',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete all rows in a table corresponding to a particular prefix
     * @param \Google\Bigtable\Admin\Table\V1\BulkDeleteRowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BulkDeleteRows(\Google\Bigtable\Admin\Table\V1\BulkDeleteRowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.table.v1.BigtableTableService/BulkDeleteRows',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
