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
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Firestore\Admin\V1beta2;

/**
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
     * Gets the metadata and configuration for a Field.
     * @param \Google\Firestore\Admin\V1beta2\GetFieldRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetField(\Google\Firestore\Admin\V1beta2\GetFieldRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta2.FirestoreAdmin/GetField',
        $argument,
        ['\Google\Firestore\Admin\V1beta2\Field', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a field configuration. Currently, field updates apply only to
     * single field index configuration. However, calls to
     * [FirestoreAdmin.UpdateField][google.firestore.admin.v1beta2.FirestoreAdmin.UpdateField] should provide a field mask to avoid
     * changing any configuration that the caller isn't aware of. The field mask
     * should be specified as: `{ paths: "index_config" }`.
     *
     * This call returns a [google.longrunning.Operation][google.longrunning.Operation] which may be used to
     * track the status of the field update. The metadata for
     * the operation will be the type [FieldOperationMetadata][google.firestore.admin.v1beta2.FieldOperationMetadata].
     *
     * To configure the default field settings for the database, use
     * the special `Field` with resource name:
     * `/projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/*`.
     * @param \Google\Firestore\Admin\V1beta2\UpdateFieldRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateField(\Google\Firestore\Admin\V1beta2\UpdateFieldRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta2.FirestoreAdmin/UpdateField',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the field configuration and metadata for this database.
     *
     * Currently, [FirestoreAdmin.ListFields][google.firestore.admin.v1beta2.FirestoreAdmin.ListFields] only supports listing fields
     * that have been explicitly overridden. To issue this query, call
     * [FirestoreAdmin.ListFields][google.firestore.admin.v1beta2.FirestoreAdmin.ListFields] with the filter set to
     * `indexConfig.usesAncestorConfig:false`.
     * @param \Google\Firestore\Admin\V1beta2\ListFieldsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFields(\Google\Firestore\Admin\V1beta2\ListFieldsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.firestore.admin.v1beta2.FirestoreAdmin/ListFields',
        $argument,
        ['\Google\Firestore\Admin\V1beta2\ListFieldsResponse', 'decode'],
        $metadata, $options);
    }

}
