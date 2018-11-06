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
namespace Google\Devtools\Resultstore\V2;

/**
 * This is the interface used to upload information to the ResultStore database,
 * to update that information as necessary, and to make it immutable at the end.
 * Every Update and Append method supports an update_mask field for restricting
 * the affected fields.
 */
class ResultStoreUploadClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates the given invocation. Generally, a unique ID will be assigned to
     * the invocation's name field by the server. This is not an implicitly
     * idempotent API, so a request id is required to make it idempotent.
     *
     * Returns an empty Invocation proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If an invocation with the same ID already exists.
     * @param \Google\Devtools\Resultstore\V2\CreateInvocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInvocation(\Google\Devtools\Resultstore\V2\CreateInvocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateInvocation',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Invocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the invocation identified by the given proto's
     * name.  For all types of fields (primitive, message, or repeated), replaces
     * them with the given proto fields if they are under the given field mask
     * paths.  Fields that match the mask but aren't populated in the given
     * invocation are cleared. This is an implicitly idempotent API.
     *
     * Returns an empty Invocation proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If the invocation does not exist.
     * - If the invocation is finished.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\UpdateInvocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInvocation(\Google\Devtools\Resultstore\V2\UpdateInvocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateInvocation',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Invocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Declares the invocation with the given name as finished and immutable.
     * This is an implicitly idempotent API.
     *
     * If an Invocation is not updated for 24 hours, some time after that
     * this will be called automatically.
     *
     * An error will be reported in the following cases:
     * - If the invocation does not exist.
     * @param \Google\Devtools\Resultstore\V2\FinishInvocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinishInvocation(\Google\Devtools\Resultstore\V2\FinishInvocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/FinishInvocation',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FinishInvocationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates the given target under the given parent invocation. The given
     * target ID is URL encoded, converted to the full resource name, and assigned
     * to the target's name field. This is not an implicitly idempotent API, so a
     * request id is required to make it idempotent.
     *
     * Returns an empty Target proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If no target ID is provided.
     * - If the parent invocation does not exist.
     * - If the parent invocation is finished.
     * - If a target with the same name already exists.
     * @param \Google\Devtools\Resultstore\V2\CreateTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTarget(\Google\Devtools\Resultstore\V2\CreateTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Target', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the target identified by the given proto's
     * name. For all types of fields (primitive, message, or repeated), replaces
     * them with the given proto fields if they are under the given field mask
     * paths. Fields that match the mask but aren't populated in the given
     * target are cleared. This is an implicitly idempotent API.
     *
     * Returns an empty Target proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If the target does not exist.
     * - If the target or parent invocation is finished.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\UpdateTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateTarget(\Google\Devtools\Resultstore\V2\UpdateTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Target', 'decode'],
        $metadata, $options);
    }

    /**
     * Declares the target with the given name as finished and immutable.
     * This is an implicitly idempotent API.
     *
     * An error will be reported in the following cases:
     * - If the target does not exist.
     * @param \Google\Devtools\Resultstore\V2\FinishTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinishTarget(\Google\Devtools\Resultstore\V2\FinishTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/FinishTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FinishTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates the given configured target under the given parent target.
     * The given configured target ID is URL encoded, converted to the full
     * resource name, and assigned to the configured target's name field.
     * This is not an implicitly idempotent API, so a request id is required
     * to make it idempotent.
     *
     * Returns an empty ConfiguredTarget proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If no config ID is provided.
     * - If a configured target with the same ID already exists.
     * - If the parent target does not exist.
     * - If the parent target or invocation is finished.
     * @param \Google\Devtools\Resultstore\V2\CreateConfiguredTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateConfiguredTarget(\Google\Devtools\Resultstore\V2\CreateConfiguredTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateConfiguredTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ConfiguredTarget', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the configured target identified by the given
     * proto's name. For all types of fields (primitive, message, or repeated),
     * replaces them with the given proto fields if they are under the given
     * field mask paths. Fields that match the mask but aren't populated in the
     * given configured target are cleared. This is an implicitly idempotent API.
     *
     * Returns an empty ConfiguredTarget proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If the configured target does not exist.
     * - If the parent target or invocation is finished.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\UpdateConfiguredTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateConfiguredTarget(\Google\Devtools\Resultstore\V2\UpdateConfiguredTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateConfiguredTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ConfiguredTarget', 'decode'],
        $metadata, $options);
    }

    /**
     * Declares the configured target with the given name as finished and
     * immutable. This is an implicitly idempotent API.
     *
     * An error will be reported in the following cases:
     * - If the configured target does not exist.
     * @param \Google\Devtools\Resultstore\V2\FinishConfiguredTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinishConfiguredTarget(\Google\Devtools\Resultstore\V2\FinishConfiguredTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/FinishConfiguredTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FinishConfiguredTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates the given action under the given configured target. The given
     * action ID is URL encoded, converted to the full resource name, and
     * assigned to the action's name field. This is not an implicitly
     * idempotent API, so a request id is required to make it idempotent.
     *
     * Returns an empty Action proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If no action ID provided.
     * - If the parent configured target does not exist.
     * - If the parent target or invocation is finished.
     * - If an action  with the same name already exists.
     * @param \Google\Devtools\Resultstore\V2\CreateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAction(\Google\Devtools\Resultstore\V2\CreateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateAction',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Action', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the action identified by the given
     * proto's name.  For all types of fields (primitive, message, or repeated),
     * replaces them with the given proto fields if they are under the given
     * field mask paths.  Fields that match the mask but aren't populated in the
     * given action are cleared.  This is an implicitly idempotent API.
     *
     * Returns an empty Action proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If the action does not exist.
     * - If the parent target or invocation is finished.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\UpdateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateAction(\Google\Devtools\Resultstore\V2\UpdateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateAction',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Action', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates the given configuration under the given parent invocation. The
     * given configuration ID is URL encoded, converted to the full resource name,
     * and assigned to the configuration's name field. The configuration ID of
     * "default" should be preferred for the default configuration in a
     * single-config invocation. This is not an implicitly idempotent API, so a
     * request id is required to make it idempotent.
     *
     * Returns an empty Configuration proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If no configuration ID is provided.
     * - If the parent invocation does not exist.
     * - If the parent invocation is finished.
     * - If a configuration with the same name already exists.
     * @param \Google\Devtools\Resultstore\V2\CreateConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateConfiguration(\Google\Devtools\Resultstore\V2\CreateConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateConfiguration',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Configuration', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the configuration identified by the given
     * proto's name. For all types of fields (primitive, message, or repeated),
     * replaces them with the given proto fields if they are under the given field
     * mask paths. Fields that match the mask but aren't populated in the given
     * configuration are cleared. This is an implicitly idempotent API.
     *
     * Returns an empty Configuration proto with only the name and ID fields
     * populated.
     *
     * An error will be reported in the following cases:
     * - If the configuration does not exist.
     * - If the parent invocation is finished.
     * - If no field mask was given.
     * - If a given field mask path is not valid.
     * @param \Google\Devtools\Resultstore\V2\UpdateConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateConfiguration(\Google\Devtools\Resultstore\V2\UpdateConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateConfiguration',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Configuration', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates the given file set under the given parent invocation. The given
     * file set ID is URL encoded, converted to the full resource name, and
     * assigned to the file set's name field. This is not an implicitly idempotent
     * API, so a request id is required to make it idempotent.
     *
     * Returns an empty FileSet proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If no file set ID is provided.
     * - If a file set with the same name already exists.
     * - If the parent invocation does not exist.
     * - If the parent invocation is finished.
     * @param \Google\Devtools\Resultstore\V2\CreateFileSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateFileSet(\Google\Devtools\Resultstore\V2\CreateFileSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/CreateFileSet',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FileSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies a standard update to the file set identified by the given proto's
     * name. For all types of fields (primitive, message, or repeated), replaces
     * them with the given proto fields if they are under the given field mask
     * paths. Fields that match the mask but aren't populated in the given
     * configuration are cleared. This is an implicitly idempotent API.
     *
     * Returns an empty FileSet proto with only the name and ID fields populated.
     *
     * An error will be reported in the following cases:
     * - If the file set does not exist.
     * - If the parent invocation is finished.
     * - If no field mask was given.
     * - If a given field mask path is not valid.
     * @param \Google\Devtools\Resultstore\V2\UpdateFileSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFileSet(\Google\Devtools\Resultstore\V2\UpdateFileSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreUpload/UpdateFileSet',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FileSet', 'decode'],
        $metadata, $options);
    }

}
