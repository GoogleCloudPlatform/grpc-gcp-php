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
namespace Google\Cloud\RuntimeConfig\V1beta1;

/**
 * RuntimeConfig API represents configuration objects and operations on those
 * configuration objects.
 * RuntimeConfig objects consist of Variables logically grouped in the those
 * objects.
 * Variables are simple key-value pairs. Variables can be watched for changes or
 * deletions. Variable key can be hieararchical, e.g. ports/serving_port,
 * ports/monitoring_port, etc. Variable names can be hierarchical. No variable
 * name can be prefix of another.
 * Config objects represent logical containers for variables, e.g. flags,
 * passwords, etc.
 */
class RuntimeConfigManagerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists all the RuntimeConfig resources within project.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\ListConfigsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConfigs(\Google\Cloud\RuntimeConfig\V1beta1\ListConfigsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/ListConfigs',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\ListConfigsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a RuntimeConfig resource.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\GetConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConfig(\Google\Cloud\RuntimeConfig\V1beta1\GetConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/GetConfig',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new RuntimeConfig resource. The configuration name must be
     * unique within project.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\CreateConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateConfig(\Google\Cloud\RuntimeConfig\V1beta1\CreateConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/CreateConfig',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a RuntimeConfig resource. The configuration must exist beforehand.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\UpdateConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateConfig(\Google\Cloud\RuntimeConfig\V1beta1\UpdateConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/UpdateConfig',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a RuntimeConfig resource.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\DeleteConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteConfig(\Google\Cloud\RuntimeConfig\V1beta1\DeleteConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/DeleteConfig',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists variables within given a configuration, matching any provided filters.
     * This only lists variable names, not the values, unless `return_values` is
     * true, in which case only variables that user has IAM permission to
     * GetVariable will be returned.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\ListVariablesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListVariables(\Google\Cloud\RuntimeConfig\V1beta1\ListVariablesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/ListVariables',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\ListVariablesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a single variable.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\GetVariableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVariable(\Google\Cloud\RuntimeConfig\V1beta1\GetVariableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/GetVariable',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\Variable', 'decode'],
        $metadata, $options);
    }

    /**
     * Watches a specific variable and waits for a change in the variable's value.
     * When there is a change, this method returns the new value or times out.
     *
     * If a variable is deleted while being watched, the `variableState` state is
     * set to `DELETED` and the method returns the last known variable `value`.
     *
     * If you set the deadline for watching to a larger value than internal timeout
     * (60 seconds), the current variable value is returned and the `variableState`
     * will be `VARIABLE_STATE_UNSPECIFIED`.
     *
     * To learn more about creating a watcher, read the
     * [Watching a Variable for Changes](/deployment-manager/runtime-configurator/watching-a-variable)
     * documentation.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\WatchVariableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WatchVariable(\Google\Cloud\RuntimeConfig\V1beta1\WatchVariableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/WatchVariable',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\Variable', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a variable within the given configuration. You cannot create
     * a variable with a name that is a prefix of an existing variable name, or a
     * name that has an existing variable name as a prefix.
     *
     * To learn more about creating a variable, read the
     * [Setting and Getting Data](/deployment-manager/runtime-configurator/set-and-get-variables)
     * documentation.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\CreateVariableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateVariable(\Google\Cloud\RuntimeConfig\V1beta1\CreateVariableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/CreateVariable',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\Variable', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing variable with a new value.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\UpdateVariableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateVariable(\Google\Cloud\RuntimeConfig\V1beta1\UpdateVariableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/UpdateVariable',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\Variable', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a variable or multiple variables.
     *
     * If you specify a variable name, then that variable is deleted. If you
     * specify a prefix and `recursive` is true, then all variables with that
     * prefix are deleted. You must set a `recursive` to true if you delete
     * variables by prefix.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\DeleteVariableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVariable(\Google\Cloud\RuntimeConfig\V1beta1\DeleteVariableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/DeleteVariable',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * List waiters within the given configuration.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\ListWaitersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListWaiters(\Google\Cloud\RuntimeConfig\V1beta1\ListWaitersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/ListWaiters',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\ListWaitersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a single waiter.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\GetWaiterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWaiter(\Google\Cloud\RuntimeConfig\V1beta1\GetWaiterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/GetWaiter',
        $argument,
        ['\Google\Cloud\RuntimeConfig\V1beta1\Waiter', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a Waiter resource. This operation returns a long-running Operation
     * resource which can be polled for completion. However, a waiter with the
     * given name will exist (and can be retrieved) prior to the operation
     * completing. If the operation fails, the failed Waiter resource will
     * still exist and must be deleted prior to subsequent creation attempts.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\CreateWaiterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateWaiter(\Google\Cloud\RuntimeConfig\V1beta1\CreateWaiterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/CreateWaiter',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the waiter with the specified name.
     * @param \Google\Cloud\RuntimeConfig\V1beta1\DeleteWaiterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteWaiter(\Google\Cloud\RuntimeConfig\V1beta1\DeleteWaiterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.runtimeconfig.v1beta1.RuntimeConfigManager/DeleteWaiter',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
