<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `DeleteConfig()` method.
 *
 * Generated from protobuf message <code>google.cloud.runtimeconfig.v1beta1.DeleteConfigRequest</code>
 */
class DeleteConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The RuntimeConfig resource to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * The RuntimeConfig resource to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The RuntimeConfig resource to delete, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

