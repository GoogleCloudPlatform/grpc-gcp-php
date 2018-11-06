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
 * This service manages datasets, which are collections of genomic data.
 */
class DatasetServiceV1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists datasets within a project.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\ListDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDatasets(\Google\Genomics\V1\ListDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/ListDatasets',
        $argument,
        ['\Google\Genomics\V1\ListDatasetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new dataset.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\CreateDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateDataset(\Google\Genomics\V1\CreateDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/CreateDataset',
        $argument,
        ['\Google\Genomics\V1\Dataset', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a dataset by ID.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\GetDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDataset(\Google\Genomics\V1\GetDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/GetDataset',
        $argument,
        ['\Google\Genomics\V1\Dataset', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a dataset.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * This method supports patch semantics.
     * @param \Google\Genomics\V1\UpdateDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateDataset(\Google\Genomics\V1\UpdateDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/UpdateDataset',
        $argument,
        ['\Google\Genomics\V1\Dataset', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a dataset and all of its contents (all read group sets,
     * reference sets, variant sets, call sets, annotation sets, etc.)
     * This is reversible (up to one week after the deletion) via
     * the
     * [datasets.undelete][google.genomics.v1.DatasetServiceV1.UndeleteDataset]
     * operation.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Genomics\V1\DeleteDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteDataset(\Google\Genomics\V1\DeleteDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/DeleteDataset',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Undeletes a dataset by restoring a dataset which was deleted via this API.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * This operation is only possible for a week after the deletion occurred.
     * @param \Google\Genomics\V1\UndeleteDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UndeleteDataset(\Google\Genomics\V1\UndeleteDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/UndeleteDataset',
        $argument,
        ['\Google\Genomics\V1\Dataset', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the access control policy on the specified dataset. Replaces any
     * existing policy.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     *
     * See <a href="/iam/docs/managing-policies#setting_a_policy">Setting a
     * Policy</a> for more information.
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the access control policy for the dataset. This is empty if the
     * policy or resource does not exist.
     *
     * See <a href="/iam/docs/managing-policies#getting_a_policy">Getting a
     * Policy</a> for more information.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     * See <a href="/iam/docs/managing-policies#testing_permissions">Testing
     * Permissions</a> for more information.
     *
     * For the definitions of datasets and other genomics resources, see
     * [Fundamentals of Google
     * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.DatasetServiceV1/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
