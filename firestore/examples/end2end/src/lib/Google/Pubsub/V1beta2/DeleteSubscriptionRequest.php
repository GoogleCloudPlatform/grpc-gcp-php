<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the DeleteSubscription method.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.DeleteSubscriptionRequest</code>
 */
class DeleteSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The subscription to delete.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The subscription to delete.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The subscription to delete.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

}

