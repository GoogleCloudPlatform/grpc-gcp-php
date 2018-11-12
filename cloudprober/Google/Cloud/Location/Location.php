<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/location/locations.proto

namespace Google\Cloud\Location;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that represents Google Cloud Platform location.
 *
 * Generated from protobuf message <code>google.cloud.location.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name for the location, which may vary between implementations.
     * For example: `"projects/example-project/locations/us-east1"`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The canonical id for this location. For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     */
    private $location_id = '';
    /**
     * The friendly name for this location, typically a nearby city name.
     * For example, "Tokyo".
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    private $display_name = '';
    /**
     * Cross-service attributes for the location. For example
     *     {"cloud.googleapis.com/region": "us-east1"}
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Service-specific metadata. For example the available capacity at the given
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 3;</code>
     */
    private $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name for the location, which may vary between implementations.
     *           For example: `"projects/example-project/locations/us-east1"`
     *     @type string $location_id
     *           The canonical id for this location. For example: `"us-east1"`.
     *     @type string $display_name
     *           The friendly name for this location, typically a nearby city name.
     *           For example, "Tokyo".
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Cross-service attributes for the location. For example
     *               {"cloud.googleapis.com/region": "us-east1"}
     *     @type \Google\Protobuf\Any $metadata
     *           Service-specific metadata. For example the available capacity at the given
     *           location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Location\Locations::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name for the location, which may vary between implementations.
     * For example: `"projects/example-project/locations/us-east1"`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name for the location, which may vary between implementations.
     * For example: `"projects/example-project/locations/us-east1"`
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

    /**
     * The canonical id for this location. For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * The canonical id for this location. For example: `"us-east1"`.
     *
     * Generated from protobuf field <code>string location_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

    /**
     * The friendly name for this location, typically a nearby city name.
     * For example, "Tokyo".
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The friendly name for this location, typically a nearby city name.
     * For example, "Tokyo".
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Cross-service attributes for the location. For example
     *     {"cloud.googleapis.com/region": "us-east1"}
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Cross-service attributes for the location. For example
     *     {"cloud.googleapis.com/region": "us-east1"}
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Service-specific metadata. For example the available capacity at the given
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 3;</code>
     * @return \Google\Protobuf\Any
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Service-specific metadata. For example the available capacity at the given
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 3;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->metadata = $var;

        return $this;
    }

}
