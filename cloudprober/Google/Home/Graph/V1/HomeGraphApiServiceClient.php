<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google Inc.
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
namespace Google\Home\Graph\V1;

/**
 * Google HomeGraph API. HomeGraph Service provides the support for storing
 * and querying first-party and third-party devices, rooms and structures,
 * the relationships among them and their state in the home. It stores
 * entities and their relationships in the home.
 */
class HomeGraphApiServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Requests a Sync call from Google to a 3p partner's home control agent for
     * a user.
     *
     *
     * Third-party user's identity is passed in as agent_user_id.
     * (see [RequestSyncDevicesRequest][google.home.graph.v1.RequestSyncDevicesRequest]) and forwarded back to the agent.
     * Agent is identified by the API key or JWT signed by the partner's service
     * account.
     * @param \Google\Home\Graph\V1\RequestSyncDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RequestSyncDevices(\Google\Home\Graph\V1\RequestSyncDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.home.graph.v1.HomeGraphApiService/RequestSyncDevices',
        $argument,
        ['\Google\Home\Graph\V1\RequestSyncDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Reports device state and optionally sends device notifications. Called by
     * an agent when the device state of a third-party changes or the agent wants
     * to send a notification about the device.
     * This method updates a predefined set of States for a device, which all
     * devices have (for example a light will have OnOff, Color, Brightness).
     * A new State may not be created and an INVALID_ARGUMENT code will be thrown
     * if so. It also optionally takes in a list of Notifications that may be
     * created, which are associated to this State change.
     *
     * Third-party user's identity is passed in as agent_user_id.
     * Agent is identified by the JWT signed by the partner's service account.
     * @param \Google\Home\Graph\V1\ReportStateAndNotificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReportStateAndNotification(\Google\Home\Graph\V1\ReportStateAndNotificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.home.graph.v1.HomeGraphApiService/ReportStateAndNotification',
        $argument,
        ['\Google\Home\Graph\V1\ReportStateAndNotificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unlink an agent user from Google. As result, all data related to this user
     * will be deleted.
     *
     * Here is how the agent user is created in Google:
     * When users open their Google Home App, they can begin linking a 3p
     * partner. User is guided through the OAuth process. After entering the 3p
     * credentials, Google gets the 3p OAuth token, and uses it to make a
     * Sync call to the 3p partner and gets back all the user's data, including
     * agent_user_id and devices.
     * Google then creates the agent user and stores a mapping from the
     * agent_user_id -> Google ID mapping. Google also stores all user's devices
     * under that Google ID.
     * The mapping from agent_user_id -> Google ID is many to many, since one
     * Google user can have multiple 3p accounts, and multiple Google users can
     * map to one agent_user_id (e.g. husband and wife share one Nest account
     * username/password).
     *
     * Third-party user's identity is passed in as agent_user_id
     * Agent is identified by the JWT signed by the partner's service account.
     *
     * Note: Special characters (except "/") in agent_user_id must be URL encoded.
     * @param \Google\Home\Graph\V1\DeleteAgentUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAgentUser(\Google\Home\Graph\V1\DeleteAgentUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.home.graph.v1.HomeGraphApiService/DeleteAgentUser',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the device states for the devices in QueryRequest.
     * Third-party user's identity is passed in as agent_user_id. Agent is
     * identified by the JWT signed by the third-party partner's service account.
     * @param \Google\Home\Graph\V1\QueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Query(\Google\Home\Graph\V1\QueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.home.graph.v1.HomeGraphApiService/Query',
        $argument,
        ['\Google\Home\Graph\V1\QueryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets all the devices associated with the given third-party user.
     * Third-party user's identity is passed in as agent_user_id. Agent is
     * identified by the JWT signed by the third-party partner's service account.
     * @param \Google\Home\Graph\V1\SyncRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Sync(\Google\Home\Graph\V1\SyncRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.home.graph.v1.HomeGraphApiService/Sync',
        $argument,
        ['\Google\Home\Graph\V1\SyncResponse', 'decode'],
        $metadata, $options);
    }

}
