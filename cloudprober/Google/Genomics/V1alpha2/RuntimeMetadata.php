<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime metadata that will be populated in the
 * [runtimeMetadata][google.genomics.v1.OperationMetadata.runtime_metadata]
 * field of the Operation associated with a RunPipeline execution.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.RuntimeMetadata</code>
 */
class RuntimeMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Execution information specific to Google Compute Engine.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.ComputeEngine compute_engine = 1;</code>
     */
    private $compute_engine = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Genomics\V1alpha2\ComputeEngine $compute_engine
     *           Execution information specific to Google Compute Engine.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * Execution information specific to Google Compute Engine.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.ComputeEngine compute_engine = 1;</code>
     * @return \Google\Genomics\V1alpha2\ComputeEngine
     */
    public function getComputeEngine()
    {
        return $this->compute_engine;
    }

    /**
     * Execution information specific to Google Compute Engine.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.ComputeEngine compute_engine = 1;</code>
     * @param \Google\Genomics\V1alpha2\ComputeEngine $var
     * @return $this
     */
    public function setComputeEngine($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1alpha2\ComputeEngine::class);
        $this->compute_engine = $var;

        return $this;
    }

}
