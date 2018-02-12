<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata associated with a long running operation resource.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The full name of the resources that this operation is directly
     * associated with.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     */
    private $resource_names;
    /**
     * Detailed status information for each step. The order is undetermined.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.OperationMetadata.Step steps = 2;</code>
     */
    private $steps;
    /**
     * Percentage of completion of this operation, ranging from 0 to 100.
     *
     * Generated from protobuf field <code>int32 progress_percentage = 3;</code>
     */
    private $progress_percentage = 0;
    /**
     * The start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    private $start_time = null;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * The full name of the resources that this operation is directly
     * associated with.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceNames()
    {
        return $this->resource_names;
    }

    /**
     * The full name of the resources that this operation is directly
     * associated with.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_names = $arr;

        return $this;
    }

    /**
     * Detailed status information for each step. The order is undetermined.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.OperationMetadata.Step steps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Detailed status information for each step. The order is undetermined.
     *
     * Generated from protobuf field <code>repeated .google.api.servicemanagement.v1.OperationMetadata.Step steps = 2;</code>
     * @param \Google\Api\Servicemanagement\V1\OperationMetadata_Step[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSteps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicemanagement\V1\OperationMetadata_Step::class);
        $this->steps = $arr;

        return $this;
    }

    /**
     * Percentage of completion of this operation, ranging from 0 to 100.
     *
     * Generated from protobuf field <code>int32 progress_percentage = 3;</code>
     * @return int
     */
    public function getProgressPercentage()
    {
        return $this->progress_percentage;
    }

    /**
     * Percentage of completion of this operation, ranging from 0 to 100.
     *
     * Generated from protobuf field <code>int32 progress_percentage = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setProgressPercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percentage = $var;

        return $this;
    }

    /**
     * The start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * The start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

}

