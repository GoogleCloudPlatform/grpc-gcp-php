<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to get a saved pipeline by id.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.GetPipelineRequest</code>
 */
class GetPipelineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Caller must have READ access to the project in which this pipeline
     * is defined.
     *
     * Generated from protobuf field <code>string pipeline_id = 1;</code>
     */
    private $pipeline_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pipeline_id
     *           Caller must have READ access to the project in which this pipeline
     *           is defined.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * Caller must have READ access to the project in which this pipeline
     * is defined.
     *
     * Generated from protobuf field <code>string pipeline_id = 1;</code>
     * @return string
     */
    public function getPipelineId()
    {
        return $this->pipeline_id;
    }

    /**
     * Caller must have READ access to the project in which this pipeline
     * is defined.
     *
     * Generated from protobuf field <code>string pipeline_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_id = $var;

        return $this;
    }

}
