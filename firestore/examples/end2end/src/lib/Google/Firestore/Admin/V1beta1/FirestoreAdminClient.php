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
namespace Google\Firestore\Admin\V1beta1;

/**
 * The Cloud Firestore Admin API.
 *
 * This API provides several administrative services for Cloud Firestore.
 *
 * # Concepts
 *
 * Project, Database, Namespace, Collection, and Document are used as defined in
 * the Google Cloud Firestore API.
 *
 * Operation: An Operation represents work being performed in the background.
 *
 *
 * # Services
 *
 * ## Index
 *
 * The index service manages Cloud Firestore indexes.
 *
 * Index creation is performed asynchronously.
 * An Operation resource is created for each such asynchronous operation.
 * The state of the operation (including any errors encountered)
 * may be queried via the Operation resource.
 *
 * ## Metadata
 *
 * Provides metadata and statistical information about data in Cloud Firestore.
 * The data provided as part of this API may be stale.
 *
 * ## Operation
 *
 * The Operations collection provides a record of actions performed for the
 * specified Project (including any Operations in progress). Operations are not
 * created directly but through calls on other collections or resources.
 *
 * An Operation that is not yet done may be cancelled. The request to cancel is
 * asynchronous and the Operation may continue to run for some time after the
 * request to cancel is made.
 *
 * An Operation that is done may be deleted so that it is no longer listed as
 * part of the Operation collection.
 *
 * Operations are created by service `FirestoreAdmin`, but are accessed via
 * service `google.longrunning.Operations`.
 */
class FirestoreAdminClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates the specified index.
     * A newly created index's initial state is `CREATING`. On completion of the
     * returned [google.longrunning.Operation][google.longrunning.Operation], the state will be `READY`.
     * If the index already exists, the call will return an `ALREADY_EXISTS`
     * status.
     *
     * During creation, the process could result in an error, in which case the
     * index will move to the `ERROR` state. The process can be recovered by
     * fixing the data that caused the error, removing the index with
     * [delete][google.firestore.admin.v1beta1.FirestoreAdmin.DeleteIndex], then re-creating the index with
     * [create][google.firestore.admin.v1beta1.FirestoreAdmin.CreateIndex].
     *
     * Indexes with a single field cannot be created.
     * @param \Google\Firestore\Admin\V1beta1\CreateIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateIndex(\Google\Firestore\Admin\V1beta1\CreateIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta1.FirestoreAdmin/CreateIndex',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the indexes that match the specified filters.
     * @param \Google\Firestore\Admin\V1beta1\ListIndexesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListIndexes(\Google\Firestore\Admin\V1beta1\ListIndexesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta1.FirestoreAdmin/ListIndexes',
        $argument,
        ['\Google\Firestore\Admin\V1beta1\ListIndexesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an index.
     * @param \Google\Firestore\Admin\V1beta1\GetIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIndex(\Google\Firestore\Admin\V1beta1\GetIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta1.FirestoreAdmin/GetIndex',
        $argument,
        ['\Google\Firestore\Admin\V1beta1\Index', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an index.
     * @param \Google\Firestore\Admin\V1beta1\DeleteIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteIndex(\Google\Firestore\Admin\V1beta1\DeleteIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta1.FirestoreAdmin/DeleteIndex',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
