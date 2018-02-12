<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataset update response.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.DatasetUpdateResponse</code>
 */
class DatasetUpdateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Final state of the updated dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     */
    private $resource = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct();
    }

    /**
     * Final state of the updated dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Dataset
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Final state of the updated dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Dataset $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Dataset::class);
        $this->resource = $var;

        return $this;
    }

}

