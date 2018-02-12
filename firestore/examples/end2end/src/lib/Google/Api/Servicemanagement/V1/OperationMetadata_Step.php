<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the status of one operation step.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.OperationMetadata.Step</code>
 */
class OperationMetadata_Step extends \Google\Protobuf\Internal\Message
{
    /**
     * The short description of the step.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.OperationMetadata.Status status = 4;</code>
     */
    private $status = 0;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * The short description of the step.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The short description of the step.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.OperationMetadata.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.OperationMetadata.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicemanagement\V1\OperationMetadata_Status::class);
        $this->status = $var;

        return $this;
    }

}

