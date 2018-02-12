<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/tracing/trace.proto

namespace Google\Tracing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.tracing.v1.Module</code>
 */
class Module extends \Google\Protobuf\Internal\Message
{
    /**
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     *
     * Generated from protobuf field <code>string module = 1;</code>
     */
    private $module = '';
    /**
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     *
     * Generated from protobuf field <code>string build_id = 2;</code>
     */
    private $build_id = '';

    public function __construct() {
        \GPBMetadata\Google\Tracing\Trace::initOnce();
        parent::__construct();
    }

    /**
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     *
     * Generated from protobuf field <code>string module = 1;</code>
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Binary module.
     * E.g. main binary, kernel modules, and dynamic libraries
     * such as libc.so, sharedlib.so
     *
     * Generated from protobuf field <code>string module = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModule($var)
    {
        GPBUtil::checkString($var, True);
        $this->module = $var;

        return $this;
    }

    /**
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     *
     * Generated from protobuf field <code>string build_id = 2;</code>
     * @return string
     */
    public function getBuildId()
    {
        return $this->build_id;
    }

    /**
     * Build_id is a unique identifier for the module,
     * probably a hash of its contents
     *
     * Generated from protobuf field <code>string build_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_id = $var;

        return $this;
    }

}

