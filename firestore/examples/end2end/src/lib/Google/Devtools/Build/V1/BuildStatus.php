<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_status.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status used for both invocation attempt and overall build completion.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.BuildStatus</code>
 */
class BuildStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The end result.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Fine-grained diagnostic information to complement the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     */
    private $details = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\BuildStatus::initOnce();
        parent::__construct();
    }

    /**
     * The end result.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The end result.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Build\V1\BuildStatus_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Fine-grained diagnostic information to complement the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     * @return \Google\Protobuf\Any
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Fine-grained diagnostic information to complement the status.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->details = $var;

        return $this;
    }

}

