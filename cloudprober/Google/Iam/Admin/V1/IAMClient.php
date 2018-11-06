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
namespace Google\Iam\Admin\V1;

/**
 * Creates and manages service account objects.
 *
 * Service account is an account that belongs to your project instead
 * of to an individual end user. It is used to authenticate calls
 * to a Google API.
 *
 * To create a service account, specify the `project_id` and `account_id`
 * for the account.  The `account_id` is unique within the project, and used
 * to generate the service account email address and a stable
 * `unique_id`.
 *
 * All other methods can identify accounts using the format
 * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
 * Using `-` as a wildcard for the project will infer the project from
 * the account. The `account` value can be the `email` address or the
 * `unique_id` of the service account.
 */
class IAMClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists [ServiceAccounts][google.iam.admin.v1.ServiceAccount] for a project.
     * @param \Google\Iam\Admin\V1\ListServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccounts(\Google\Iam\Admin\V1\ListServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/ListServiceAccounts',
        $argument,
        ['\Google\Iam\Admin\V1\ListServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\Admin\V1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccount(\Google\Iam\Admin\V1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetServiceAccount',
        $argument,
        ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a [ServiceAccount][google.iam.admin.v1.ServiceAccount]
     * and returns it.
     * @param \Google\Iam\Admin\V1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccount(\Google\Iam\Admin\V1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/CreateServiceAccount',
        $argument,
        ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     *
     * Currently, only the following fields are updatable:
     * `display_name` .
     * The `etag` is mandatory.
     * @param \Google\Iam\Admin\V1\ServiceAccount $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateServiceAccount(\Google\Iam\Admin\V1\ServiceAccount $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/UpdateServiceAccount',
        $argument,
        ['\Google\Iam\Admin\V1\ServiceAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Iam\Admin\V1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccount(\Google\Iam\Admin\V1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/DeleteServiceAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists [ServiceAccountKeys][google.iam.admin.v1.ServiceAccountKey].
     * @param \Google\Iam\Admin\V1\ListServiceAccountKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServiceAccountKeys(\Google\Iam\Admin\V1\ListServiceAccountKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/ListServiceAccountKeys',
        $argument,
        ['\Google\Iam\Admin\V1\ListServiceAccountKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * by key id.
     * @param \Google\Iam\Admin\V1\GetServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetServiceAccountKey(\Google\Iam\Admin\V1\GetServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetServiceAccountKey',
        $argument,
        ['\Google\Iam\Admin\V1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey]
     * and returns it.
     * @param \Google\Iam\Admin\V1\CreateServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateServiceAccountKey(\Google\Iam\Admin\V1\CreateServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/CreateServiceAccountKey',
        $argument,
        ['\Google\Iam\Admin\V1\ServiceAccountKey', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [ServiceAccountKey][google.iam.admin.v1.ServiceAccountKey].
     * @param \Google\Iam\Admin\V1\DeleteServiceAccountKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteServiceAccountKey(\Google\Iam\Admin\V1\DeleteServiceAccountKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/DeleteServiceAccountKey',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Signs a blob using a service account's system-managed private key.
     * @param \Google\Iam\Admin\V1\SignBlobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignBlob(\Google\Iam\Admin\V1\SignBlobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/SignBlob',
        $argument,
        ['\Google\Iam\Admin\V1\SignBlobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Signs a JWT using a service account's system-managed private key.
     *
     * If no expiry time (`exp`) is provided in the `SignJwtRequest`, IAM sets an
     * an expiry time of one hour by default. If you request an expiry time of
     * more than one hour, the request will fail.
     * @param \Google\Iam\Admin\V1\SignJwtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignJwt(\Google\Iam\Admin\V1\SignJwtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/SignJwt',
        $argument,
        ['\Google\Iam\Admin\V1\SignJwtResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the IAM access control policy for a
     * [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Tests the specified permissions against the IAM access control policy
     * for a [ServiceAccount][google.iam.admin.v1.ServiceAccount].
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Queries roles that can be granted on a particular resource.
     * A role is grantable if it can be used as the role in a binding for a policy
     * for that resource.
     * @param \Google\Iam\Admin\V1\QueryGrantableRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryGrantableRoles(\Google\Iam\Admin\V1\QueryGrantableRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/QueryGrantableRoles',
        $argument,
        ['\Google\Iam\Admin\V1\QueryGrantableRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the Roles defined on a resource.
     * @param \Google\Iam\Admin\V1\ListRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListRoles(\Google\Iam\Admin\V1\ListRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/ListRoles',
        $argument,
        ['\Google\Iam\Admin\V1\ListRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a Role definition.
     * @param \Google\Iam\Admin\V1\GetRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRole(\Google\Iam\Admin\V1\GetRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/GetRole',
        $argument,
        ['\Google\Iam\Admin\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Role.
     * @param \Google\Iam\Admin\V1\CreateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateRole(\Google\Iam\Admin\V1\CreateRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/CreateRole',
        $argument,
        ['\Google\Iam\Admin\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a Role definition.
     * @param \Google\Iam\Admin\V1\UpdateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateRole(\Google\Iam\Admin\V1\UpdateRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/UpdateRole',
        $argument,
        ['\Google\Iam\Admin\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * Soft deletes a role. The role is suspended and cannot be used to create new
     * IAM Policy Bindings.
     * The Role will not be included in `ListRoles()` unless `show_deleted` is set
     * in the `ListRolesRequest`. The Role contains the deleted boolean set.
     * Existing Bindings remains, but are inactive. The Role can be undeleted
     * within 7 days. After 7 days the Role is deleted and all Bindings associated
     * with the role are removed.
     * @param \Google\Iam\Admin\V1\DeleteRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteRole(\Google\Iam\Admin\V1\DeleteRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/DeleteRole',
        $argument,
        ['\Google\Iam\Admin\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * Undelete a Role, bringing it back in its previous state.
     * @param \Google\Iam\Admin\V1\UndeleteRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UndeleteRole(\Google\Iam\Admin\V1\UndeleteRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/UndeleteRole',
        $argument,
        ['\Google\Iam\Admin\V1\Role', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the permissions testable on a resource.
     * A permission is testable if it can be tested for an identity on a resource.
     * @param \Google\Iam\Admin\V1\QueryTestablePermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryTestablePermissions(\Google\Iam\Admin\V1\QueryTestablePermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.iam.admin.v1.IAM/QueryTestablePermissions',
        $argument,
        ['\Google\Iam\Admin\V1\QueryTestablePermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
