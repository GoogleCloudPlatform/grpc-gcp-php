<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/operation.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the given [google.longrunning.Operation][google.longrunning.Operation].
 *
 * Generated from protobuf message <code>google.appengine.v1.OperationMetadataV1</code>
 */
class OperationMetadataV1 extends \Google\Protobuf\Internal\Message
{
    /**
     * API method that initiated this operation. Example:
     * `google.appengine.v1.Versions.CreateVersion`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string method = 1;</code>
     */
    private $method = '';
    /**
     * Time that this operation was created.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp insert_time = 2;</code>
     */
    private $insert_time = null;
    /**
     * Time that this operation completed.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;
    /**
     * User who requested this operation.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string user = 4;</code>
     */
    private $user = '';
    /**
     * Name of the resource that this operation is acting on. Example:
     * `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string target = 5;</code>
     */
    private $target = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Operation::initOnce();
        parent::__construct();
    }

    /**
     * API method that initiated this operation. Example:
     * `google.appengine.v1.Versions.CreateVersion`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * API method that initiated this operation. Example:
     * `google.appengine.v1.Versions.CreateVersion`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Time that this operation was created.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp insert_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getInsertTime()
    {
        return $this->insert_time;
    }

    /**
     * Time that this operation was created.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp insert_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setInsertTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->insert_time = $var;

        return $this;
    }

    /**
     * Time that this operation completed.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Time that this operation completed.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * User who requested this operation.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string user = 4;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * User who requested this operation.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string user = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Name of the resource that this operation is acting on. Example:
     * `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string target = 5;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Name of the resource that this operation is acting on. Example:
     * `apps/myapp/services/default`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string target = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

}

