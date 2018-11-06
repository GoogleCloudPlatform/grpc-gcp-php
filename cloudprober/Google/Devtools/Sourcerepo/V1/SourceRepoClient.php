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
namespace Google\Devtools\Sourcerepo\V1;

/**
 * The Source Repo API service.
 */
class SourceRepoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns all repos belonging to a project. The sizes of the repos are
     * not set by ListRepos.  To get the size of a repo, use GetRepo.
     * @param \Google\Devtools\Sourcerepo\V1\ListReposRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListRepos(\Google\Devtools\Sourcerepo\V1\ListReposRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/ListRepos',
        $argument,
        ['\Google\Devtools\Sourcerepo\V1\ListReposResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns information about a repo.
     * @param \Google\Devtools\Sourcerepo\V1\GetRepoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRepo(\Google\Devtools\Sourcerepo\V1\GetRepoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/GetRepo',
        $argument,
        ['\Google\Devtools\Sourcerepo\V1\Repo', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a repo in the given project with the given name.
     *
     * If the named repository already exists, `CreateRepo` returns
     * `ALREADY_EXISTS`.
     * @param \Google\Devtools\Sourcerepo\V1\CreateRepoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateRepo(\Google\Devtools\Sourcerepo\V1\CreateRepoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/CreateRepo',
        $argument,
        ['\Google\Devtools\Sourcerepo\V1\Repo', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a repo.
     * @param \Google\Devtools\Sourcerepo\V1\DeleteRepoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteRepo(\Google\Devtools\Sourcerepo\V1\DeleteRepoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/DeleteRepo',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any
     * existing policy.
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the access control policy for a resource.
     * Returns an empty policy if the resource exists and does not have a policy
     * set.
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     * If the resource does not exist, this will return an empty set of
     * permissions, not a NOT_FOUND error.
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.sourcerepo.v1.SourceRepo/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
