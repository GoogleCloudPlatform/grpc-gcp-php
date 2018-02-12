<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright (c) 2015, Google Inc.
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
namespace Google\Pubsub\V1beta2;

/**
 * The service that an application uses to manipulate topics, and to send
 * messages to a topic.
 */
class PublisherClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates the given topic with the given name.
     * @param \Google\Pubsub\V1beta2\Topic $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTopic(\Google\Pubsub\V1beta2\Topic $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/CreateTopic',
        $argument,
        ['\Google\Pubsub\V1beta2\Topic', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds one or more messages to the topic. Returns NOT_FOUND if the topic does
     * not exist.
     * @param \Google\Pubsub\V1beta2\PublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Publish(\Google\Pubsub\V1beta2\PublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/Publish',
        $argument,
        ['\Google\Pubsub\V1beta2\PublishResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the configuration of a topic.
     * @param \Google\Pubsub\V1beta2\GetTopicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTopic(\Google\Pubsub\V1beta2\GetTopicRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/GetTopic',
        $argument,
        ['\Google\Pubsub\V1beta2\Topic', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists matching topics.
     * @param \Google\Pubsub\V1beta2\ListTopicsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTopics(\Google\Pubsub\V1beta2\ListTopicsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/ListTopics',
        $argument,
        ['\Google\Pubsub\V1beta2\ListTopicsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the name of the subscriptions for this topic.
     * @param \Google\Pubsub\V1beta2\ListTopicSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTopicSubscriptions(\Google\Pubsub\V1beta2\ListTopicSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/ListTopicSubscriptions',
        $argument,
        ['\Google\Pubsub\V1beta2\ListTopicSubscriptionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the topic with the given name. Returns NOT_FOUND if the topic does
     * not exist. After a topic is deleted, a new topic may be created with the
     * same name; this is an entirely new topic with none of the old
     * configuration or subscriptions. Existing subscriptions to this topic are
     * not deleted.
     * @param \Google\Pubsub\V1beta2\DeleteTopicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteTopic(\Google\Pubsub\V1beta2\DeleteTopicRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Publisher/DeleteTopic',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

}
