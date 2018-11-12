<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message and its corresponding acknowledgment ID.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.ReceivedMessage</code>
 */
class ReceivedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     */
    private $ack_id = '';
    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1beta2.PubsubMessage message = 2;</code>
     */
    private $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ack_id
     *           This ID can be used to acknowledge the received message.
     *     @type \Google\Pubsub\V1beta2\PubsubMessage $message
     *           The message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @return string
     */
    public function getAckId()
    {
        return $this->ack_id;
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_id = $var;

        return $this;
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1beta2.PubsubMessage message = 2;</code>
     * @return \Google\Pubsub\V1beta2\PubsubMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1beta2.PubsubMessage message = 2;</code>
     * @param \Google\Pubsub\V1beta2\PubsubMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1beta2\PubsubMessage::class);
        $this->message = $var;

        return $this;
    }

}
