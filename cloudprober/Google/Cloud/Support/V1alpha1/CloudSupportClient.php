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
namespace Google\Cloud\Support\V1alpha1;

/**
 * Retrieves the list of Google Cloud Platform Support accounts and manages
 * support cases associated with them.
 */
class CloudSupportClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves the support account details given an account identifier.
     * The authenticated user calling this method must be the account owner.
     * @param \Google\Cloud\Support\V1alpha1\GetSupportAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSupportAccount(\Google\Cloud\Support\V1alpha1\GetSupportAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/GetSupportAccount',
        $argument,
        ['\Google\Cloud\Support\Common\SupportAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the list of accounts the current authenticated user has access
     * to.
     * @param \Google\Cloud\Support\V1alpha1\ListSupportAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSupportAccounts(\Google\Cloud\Support\V1alpha1\ListSupportAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/ListSupportAccounts',
        $argument,
        ['\Google\Cloud\Support\V1alpha1\ListSupportAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the details for a support case. The current authenticated user
     * calling this method must have permissions to view this case.
     * @param \Google\Cloud\Support\V1alpha1\GetCaseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCase(\Google\Cloud\Support\V1alpha1\GetCaseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/GetCase',
        $argument,
        ['\Google\Cloud\Support\Common\PBCase', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the list of support cases associated with an account. The current
     * authenticated user must have the permission to list and view these cases.
     * @param \Google\Cloud\Support\V1alpha1\ListCasesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCases(\Google\Cloud\Support\V1alpha1\ListCasesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/ListCases',
        $argument,
        ['\Google\Cloud\Support\V1alpha1\ListCasesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all comments from a case.
     * @param \Google\Cloud\Support\V1alpha1\ListCommentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListComments(\Google\Cloud\Support\V1alpha1\ListCommentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/ListComments',
        $argument,
        ['\Google\Cloud\Support\V1alpha1\ListCommentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a case and associates it with a
     * [SupportAccount][google.cloud.support.v1alpha2.SupportAcccount]. The
     * authenticated user attempting this action must have permissions to create a
     * `Case` under that [SupportAccount].
     * @param \Google\Cloud\Support\V1alpha1\CreateCaseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateCase(\Google\Cloud\Support\V1alpha1\CreateCaseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/CreateCase',
        $argument,
        ['\Google\Cloud\Support\Common\PBCase', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a support case. Only a small set of details (priority, subject and
     * cc_address) can be update after a case is created.
     * @param \Google\Cloud\Support\V1alpha1\UpdateCaseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateCase(\Google\Cloud\Support\V1alpha1\UpdateCaseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/UpdateCase',
        $argument,
        ['\Google\Cloud\Support\Common\PBCase', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds a new comment to a case.
     * @param \Google\Cloud\Support\V1alpha1\CreateCommentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateComment(\Google\Cloud\Support\V1alpha1\CreateCommentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/CreateComment',
        $argument,
        ['\Google\Cloud\Support\Common\Comment', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the taxonomy of product categories and components to be used
     * while creating a support case.
     * @param \Google\Cloud\Support\V1alpha1\GetIssueTaxonomyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIssueTaxonomy(\Google\Cloud\Support\V1alpha1\GetIssueTaxonomyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.support.v1alpha1.CloudSupport/GetIssueTaxonomy',
        $argument,
        ['\Google\Cloud\Support\Common\IssueTaxonomy', 'decode'],
        $metadata, $options);
    }

}
