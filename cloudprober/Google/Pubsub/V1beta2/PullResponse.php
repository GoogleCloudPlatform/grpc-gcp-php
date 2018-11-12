<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the Pull method.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.PullResponse</code>
 */
class PullResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Received Pub/Sub messages. The Pub/Sub system will return zero messages if
     * there are no more available in the backlog. The Pub/Sub system may return
     * fewer than the maxMessages requested even if there are more messages
     * available in the backlog.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.ReceivedMessage received_messages = 1;</code>
     */
    private $received_messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Pubsub\V1beta2\ReceivedMessage[]|\Google\Protobuf\Internal\RepeatedField $received_messages
     *           Received Pub/Sub messages. The Pub/Sub system will return zero messages if
     *           there are no more available in the backlog. The Pub/Sub system may return
     *           fewer than the maxMessages requested even if there are more messages
     *           available in the backlog.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Received Pub/Sub messages. The Pub/Sub system will return zero messages if
     * there are no more available in the backlog. The Pub/Sub system may return
     * fewer than the maxMessages requested even if there are more messages
     * available in the backlog.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.ReceivedMessage received_messages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceivedMessages()
    {
        return $this->received_messages;
    }

    /**
     * Received Pub/Sub messages. The Pub/Sub system will return zero messages if
     * there are no more available in the backlog. The Pub/Sub system may return
     * fewer than the maxMessages requested even if there are more messages
     * available in the backlog.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.ReceivedMessage received_messages = 1;</code>
     * @param \Google\Pubsub\V1beta2\ReceivedMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceivedMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Pubsub\V1beta2\ReceivedMessage::class);
        $this->received_messages = $arr;

        return $this;
    }

}
