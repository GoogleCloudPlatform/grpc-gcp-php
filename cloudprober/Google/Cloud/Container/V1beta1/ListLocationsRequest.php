<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListLocationsRequest is used to request the locations that offer GKE.
 *
 * Generated from protobuf message <code>google.container.v1beta1.ListLocationsRequest</code>
 */
class ListLocationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains the name of the resource requested.
     * Specified in the format 'projects/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Contains the name of the resource requested.
     *           Specified in the format 'projects/&#42;'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains the name of the resource requested.
     * Specified in the format 'projects/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Contains the name of the resource requested.
     * Specified in the format 'projects/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}
