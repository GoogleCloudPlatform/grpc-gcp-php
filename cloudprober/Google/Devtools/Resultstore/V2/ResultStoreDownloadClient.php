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
 * This is the interface used to download information from the database.
 *
 * Most APIs require setting a response FieldMask via the 'fields' URL query
 * parameter or the X-Goog-FieldMask HTTP/gRPC header.
 * Each resource in this interface carries a name field that
 * identifies the resource.
 */
class ResultStoreDownloadClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves the invocation with the given name.
     *
     * An error will be reported in the following cases:
     * - If the invocation is not found.
     * - If the given invocation name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetInvocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInvocation(\Google\Devtools\Resultstore\V2\GetInvocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetInvocation',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Invocation', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for invocations matching the given query parameters.
     *
     *
     * An error will be reported in the following cases:
     * - If a query string is not provided
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\SearchInvocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchInvocations(\Google\Devtools\Resultstore\V2\SearchInvocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/SearchInvocations',
        $argument,
        ['\Google\Devtools\Resultstore\V2\SearchInvocationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the configuration with the given name.
     *
     * An error will be reported in the following cases:
     * - If the configuration or its parent invocation is not found.
     * - If the given configuration name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetConfigurationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConfiguration(\Google\Devtools\Resultstore\V2\GetConfigurationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetConfiguration',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Configuration', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all configurations for a parent invocation.
     * This might be limited by user or server,
     * in which case a continuation token is provided.
     *
     * An error will be reported in the following cases:
     * - If the parent invocation is not found.
     * - If the given parent invocation name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\ListConfigurationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConfigurations(\Google\Devtools\Resultstore\V2\ListConfigurationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/ListConfigurations',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ListConfigurationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the target with the given name.
     *
     * An error will be reported in the following cases:
     * - If the target or its parent invocation is not found.
     * - If the given target name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTarget(\Google\Devtools\Resultstore\V2\GetTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Target', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all targets for a parent invocation.  This might be limited by
     * user or server, in which case a continuation token is provided.
     *
     * An error will be reported in the following cases:
     * - If the parent is not found.
     * - If the given parent name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\ListTargetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTargets(\Google\Devtools\Resultstore\V2\ListTargetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/ListTargets',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ListTargetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the configured target with the given name.
     *
     * An error will be reported in the following cases:
     * - If the configured target is not found.
     * - If the given name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetConfiguredTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConfiguredTarget(\Google\Devtools\Resultstore\V2\GetConfiguredTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetConfiguredTarget',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ConfiguredTarget', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all configured targets for a parent invocation/target.
     * This might be limited by user or server, in which case a continuation
     * token is provided.  Supports '-' for targetId meaning all targets.
     *
     * An error will be reported in the following cases:
     * - If the parent is not found.
     * - If the given parent name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\ListConfiguredTargetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConfiguredTargets(\Google\Devtools\Resultstore\V2\ListConfiguredTargetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/ListConfiguredTargets',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ListConfiguredTargetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the action with the given name.
     *
     * An error will be reported in the following cases:
     * - If the action is not found.
     * - If the given name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAction(\Google\Devtools\Resultstore\V2\GetActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetAction',
        $argument,
        ['\Google\Devtools\Resultstore\V2\Action', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all actions for a parent invocation/target/configuration.
     * This might be limited by user or server, in which case a continuation
     * token is provided.  Supports '-' for configurationId to mean all
     * actions for all configurations for a target, or '-' for targetId and
     * configurationId to mean all actions for all configurations and all targets.
     * Does not support targetId '-' with a specified configuration.
     *
     * An error will be reported in the following cases:
     * - If the parent is not found.
     * - If the given parent name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\ListActionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListActions(\Google\Devtools\Resultstore\V2\ListActionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/ListActions',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ListActionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the file set with the given name.
     *
     * An error will be reported in the following cases:
     * - If the file set or its parent invocation is not found.
     * - If the given file set name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\GetFileSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFileSet(\Google\Devtools\Resultstore\V2\GetFileSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/GetFileSet',
        $argument,
        ['\Google\Devtools\Resultstore\V2\FileSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves all file sets for a parent invocation.
     * This might be limited by user or server,
     * in which case a continuation token is provided.
     *
     * An error will be reported in the following cases:
     * - If the parent invocation is not found.
     * - If the given parent invocation name is badly formatted.
     * - If no field mask was given.
     * @param \Google\Devtools\Resultstore\V2\ListFileSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFileSets(\Google\Devtools\Resultstore\V2\ListFileSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreDownload/ListFileSets',
        $argument,
        ['\Google\Devtools\Resultstore\V2\ListFileSetsResponse', 'decode'],
        $metadata, $options);
    }

}
