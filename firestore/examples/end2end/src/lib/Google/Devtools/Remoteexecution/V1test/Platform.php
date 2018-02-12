<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Platform` is a set of requirements, such as hardware, operating system, or
 * compiler toolchain, for an
 * [Action][google.devtools.remoteexecution.v1test.Action]'s execution
 * environment. A `Platform` is represented as a series of key-value pairs
 * representing the properties that are required of the platform.
 * This message is currently being redeveloped since it is an overly simplistic
 * model of platforms.
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.Platform</code>
 */
class Platform extends \Google\Protobuf\Internal\Message
{
    /**
     * The properties that make up this platform. In order to ensure that
     * equivalent `Platform`s always hash to the same value, the properties MUST
     * be lexicographically sorted by name, and then by value. Sorting of strings
     * is done by code point, equivalently, by the UTF-8 bytes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Platform.Property properties = 1;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct();
    }

    /**
     * The properties that make up this platform. In order to ensure that
     * equivalent `Platform`s always hash to the same value, the properties MUST
     * be lexicographically sorted by name, and then by value. Sorting of strings
     * is done by code point, equivalently, by the UTF-8 bytes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Platform.Property properties = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * The properties that make up this platform. In order to ensure that
     * equivalent `Platform`s always hash to the same value, the properties MUST
     * be lexicographically sorted by name, and then by value. Sorting of strings
     * is done by code point, equivalently, by the UTF-8 bytes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Platform.Property properties = 1;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\Platform_Property[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteexecution\V1test\Platform_Property::class);
        $this->properties = $arr;

        return $this;
    }

}

