<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the ListSubscriptions method.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.ListSubscriptionsResponse</code>
 */
class ListSubscriptionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The subscriptions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.Subscription subscriptions = 1;</code>
     */
    private $subscriptions;
    /**
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new ListSubscriptionsRequest
     * to get more subscriptions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The subscriptions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.Subscription subscriptions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * The subscriptions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1beta2.Subscription subscriptions = 1;</code>
     * @param \Google\Pubsub\V1beta2\Subscription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Pubsub\V1beta2\Subscription::class);
        $this->subscriptions = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new ListSubscriptionsRequest
     * to get more subscriptions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more subscriptions that match
     * the request; this value should be passed in a new ListSubscriptionsRequest
     * to get more subscriptions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

