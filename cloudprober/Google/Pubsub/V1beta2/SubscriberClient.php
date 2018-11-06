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
 * The service that an application uses to manipulate subscriptions and to
 * consume messages from a subscription via the Pull method.
 */
class SubscriberClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a subscription to a given topic for a given subscriber.
     * If the subscription already exists, returns ALREADY_EXISTS.
     * If the corresponding topic doesn't exist, returns NOT_FOUND.
     *
     * If the name is not provided in the request, the server will assign a random
     * name for this subscription on the same project as the topic.
     * @param \Google\Pubsub\V1beta2\Subscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateSubscription(\Google\Pubsub\V1beta2\Subscription $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/CreateSubscription',
        $argument,
        ['\Google\Pubsub\V1beta2\Subscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the configuration details of a subscription.
     * @param \Google\Pubsub\V1beta2\GetSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSubscription(\Google\Pubsub\V1beta2\GetSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/GetSubscription',
        $argument,
        ['\Google\Pubsub\V1beta2\Subscription', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists matching subscriptions.
     * @param \Google\Pubsub\V1beta2\ListSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSubscriptions(\Google\Pubsub\V1beta2\ListSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/ListSubscriptions',
        $argument,
        ['\Google\Pubsub\V1beta2\ListSubscriptionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an existing subscription. All pending messages in the subscription
     * are immediately dropped. Calls to Pull after deletion will return
     * NOT_FOUND. After a subscription is deleted, a new one may be created with
     * the same name, but the new one has no association with the old
     * subscription, or its topic unless the same topic is specified.
     * @param \Google\Pubsub\V1beta2\DeleteSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteSubscription(\Google\Pubsub\V1beta2\DeleteSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/DeleteSubscription',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Modifies the ack deadline for a specific message. This method is useful to
     * indicate that more time is needed to process a message by the subscriber,
     * or to make the message available for redelivery if the processing was
     * interrupted.
     * @param \Google\Pubsub\V1beta2\ModifyAckDeadlineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyAckDeadline(\Google\Pubsub\V1beta2\ModifyAckDeadlineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/ModifyAckDeadline',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Acknowledges the messages associated with the ack tokens in the
     * AcknowledgeRequest. The Pub/Sub system can remove the relevant messages
     * from the subscription.
     *
     * Acknowledging a message whose ack deadline has expired may succeed,
     * but such a message may be redelivered later. Acknowledging a message more
     * than once will not result in an error.
     * @param \Google\Pubsub\V1beta2\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Acknowledge(\Google\Pubsub\V1beta2\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/Acknowledge',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Pulls messages from the server. Returns an empty list if there are no
     * messages available in the backlog. The server may return UNAVAILABLE if
     * there are too many concurrent pull requests pending for the given
     * subscription.
     * @param \Google\Pubsub\V1beta2\PullRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Pull(\Google\Pubsub\V1beta2\PullRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/Pull',
        $argument,
        ['\Google\Pubsub\V1beta2\PullResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Modifies the PushConfig for a specified subscription.
     *
     * This may be used to change a push subscription to a pull one (signified
     * by an empty PushConfig) or vice versa, or change the endpoint URL and other
     * attributes of a push subscription. Messages will accumulate for
     * delivery continuously through the call regardless of changes to the
     * PushConfig.
     * @param \Google\Pubsub\V1beta2\ModifyPushConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyPushConfig(\Google\Pubsub\V1beta2\ModifyPushConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.pubsub.v1beta2.Subscriber/ModifyPushConfig',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
