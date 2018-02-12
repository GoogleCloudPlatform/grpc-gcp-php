<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a property relative to the kind expressions.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.PropertyReference</code>
 */
class PropertyReference extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the property.
     * If name includes "."s, it may be interpreted as a property name path.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct();
    }

    /**
     * The name of the property.
     * If name includes "."s, it may be interpreted as a property name path.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the property.
     * If name includes "."s, it may be interpreted as a property name path.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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

