<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for manually scaling a model.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.ManualScaling</code>
 */
class ManualScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     *
     * Generated from protobuf field <code>int32 nodes = 1;</code>
     */
    private $nodes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nodes
     *           The number of nodes to allocate for this model. These nodes are always up,
     *           starting from the time the model is deployed, so the cost of operating
     *           this model will be proportional to nodes * number of hours since
     *           deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     *
     * Generated from protobuf field <code>int32 nodes = 1;</code>
     * @return int
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * The number of nodes to allocate for this model. These nodes are always up,
     * starting from the time the model is deployed, so the cost of operating
     * this model will be proportional to nodes * number of hours since
     * deployment.
     *
     * Generated from protobuf field <code>int32 nodes = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->nodes = $var;

        return $this;
    }

}
