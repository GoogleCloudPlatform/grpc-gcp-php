<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC.
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
//
namespace Google\Cloud\Securitycenter\V1beta1;

/**
 * V1 Beta APIs for Security Center service.
 */
class SecurityCenterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a source.
     * @param \Google\Cloud\Securitycenter\V1beta1\CreateSourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateSource(\Google\Cloud\Securitycenter\V1beta1\CreateSourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/CreateSource',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Source', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a finding. The corresponding source must exist for finding creation
     * to succeed.
     * @param \Google\Cloud\Securitycenter\V1beta1\CreateFindingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateFinding(\Google\Cloud\Securitycenter\V1beta1\CreateFindingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/CreateFinding',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Finding', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the access control policy on the specified Source.
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the settings for an organization.
     * @param \Google\Cloud\Securitycenter\V1beta1\GetOrganizationSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOrganizationSettings(\Google\Cloud\Securitycenter\V1beta1\GetOrganizationSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/GetOrganizationSettings',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\OrganizationSettings', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a source.
     * @param \Google\Cloud\Securitycenter\V1beta1\GetSourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSource(\Google\Cloud\Securitycenter\V1beta1\GetSourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/GetSource',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Source', 'decode'],
        $metadata, $options);
    }

    /**
     * Filters an organization's assets and  groups them by their specified
     * properties.
     * @param \Google\Cloud\Securitycenter\V1beta1\GroupAssetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GroupAssets(\Google\Cloud\Securitycenter\V1beta1\GroupAssetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/GroupAssets',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\GroupAssetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Filters an organization or source's findings and  groups them by their
     * specified properties.
     *
     * To group across all sources provide a `-` as the source id.
     * Example: /v1beta1/organizations/123/sources/-/findings
     * @param \Google\Cloud\Securitycenter\V1beta1\GroupFindingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GroupFindings(\Google\Cloud\Securitycenter\V1beta1\GroupFindingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/GroupFindings',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\GroupFindingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists an organization's assets.
     * @param \Google\Cloud\Securitycenter\V1beta1\ListAssetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAssets(\Google\Cloud\Securitycenter\V1beta1\ListAssetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/ListAssets',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\ListAssetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists an organization or source's assets.
     *
     * To list across all sources provide a `-` as the source id.
     * Example: /v1beta1/organizations/123/sources/-/findings
     * @param \Google\Cloud\Securitycenter\V1beta1\ListFindingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFindings(\Google\Cloud\Securitycenter\V1beta1\ListFindingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/ListFindings',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\ListFindingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all sources belonging to an organization.
     * @param \Google\Cloud\Securitycenter\V1beta1\ListSourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSources(\Google\Cloud\Securitycenter\V1beta1\ListSourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/ListSources',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\ListSourcesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Runs asset discovery. The discovery is tracked with a long-running
     * operation.
     *
     * This API can only be called with limited frequency for an organization. If
     * it is called too frequently the caller will receive a TOO_MANY_REQUESTS
     * error.
     * @param \Google\Cloud\Securitycenter\V1beta1\RunAssetDiscoveryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RunAssetDiscovery(\Google\Cloud\Securitycenter\V1beta1\RunAssetDiscoveryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/RunAssetDiscovery',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the state of a finding.
     * @param \Google\Cloud\Securitycenter\V1beta1\SetFindingStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetFindingState(\Google\Cloud\Securitycenter\V1beta1\SetFindingStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/SetFindingState',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Finding', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the access control policy on the specified Source.
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the permissions that a caller has on the specified source.
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates or updates a finding. The corresponding source must exist for a
     * finding creation to succeed.
     * @param \Google\Cloud\Securitycenter\V1beta1\UpdateFindingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFinding(\Google\Cloud\Securitycenter\V1beta1\UpdateFindingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/UpdateFinding',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Finding', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an organization's settings.
     * @param \Google\Cloud\Securitycenter\V1beta1\UpdateOrganizationSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateOrganizationSettings(\Google\Cloud\Securitycenter\V1beta1\UpdateOrganizationSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/UpdateOrganizationSettings',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\OrganizationSettings', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a source.
     * @param \Google\Cloud\Securitycenter\V1beta1\UpdateSourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateSource(\Google\Cloud\Securitycenter\V1beta1\UpdateSourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/UpdateSource',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\Source', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates security marks.
     * @param \Google\Cloud\Securitycenter\V1beta1\UpdateSecurityMarksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateSecurityMarks(\Google\Cloud\Securitycenter\V1beta1\UpdateSecurityMarksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.securitycenter.v1beta1.SecurityCenter/UpdateSecurityMarks',
        $argument,
        ['\Google\Cloud\Securitycenter\V1beta1\SecurityMarks', 'decode'],
        $metadata, $options);
    }

}
