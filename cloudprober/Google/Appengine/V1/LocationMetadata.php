<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/location.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the given [google.cloud.location.Location][google.cloud.location.Location].
 *
 * Generated from protobuf message <code>google.appengine.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     */
    private $standard_environment_available = false;
    /**
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     */
    private $flexible_environment_available = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $standard_environment_available
     *           App Engine Standard Environment is available in the given location.
     *           &#64;OutputOnly
     *     @type bool $flexible_environment_available
     *           App Engine Flexible Environment is available in the given location.
     *           &#64;OutputOnly
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Location::initOnce();
        parent::__construct($data);
    }

    /**
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     * @return bool
     */
    public function getStandardEnvironmentAvailable()
    {
        return $this->standard_environment_available;
    }

    /**
     * App Engine Standard Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setStandardEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->standard_environment_available = $var;

        return $this;
    }

    /**
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     * @return bool
     */
    public function getFlexibleEnvironmentAvailable()
    {
        return $this->flexible_environment_available;
    }

    /**
     * App Engine Flexible Environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setFlexibleEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->flexible_environment_available = $var;

        return $this;
    }

}
