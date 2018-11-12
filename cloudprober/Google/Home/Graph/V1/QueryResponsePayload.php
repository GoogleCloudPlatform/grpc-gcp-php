<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/homegraph.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload containing device states information.
 *
 * Generated from protobuf message <code>google.home.graph.v1.QueryResponsePayload</code>
 */
class QueryResponsePayload extends \Google\Protobuf\Internal\Message
{
    /**
     * States of the devices. Map of third-party device ID to struct of device
     * states.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Struct> devices = 1;</code>
     */
    private $devices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $devices
     *           States of the devices. Map of third-party device ID to struct of device
     *           states.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Graph\V1\Homegraph::initOnce();
        parent::__construct($data);
    }

    /**
     * States of the devices. Map of third-party device ID to struct of device
     * states.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Struct> devices = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * States of the devices. Map of third-party device ID to struct of device
     * states.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Struct> devices = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Struct::class);
        $this->devices = $arr;

        return $this;
    }

}
