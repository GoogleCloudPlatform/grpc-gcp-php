<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job insert response.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.JobInsertResponse</code>
 */
class JobInsertResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Job insert response.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job resource = 1;</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Logging\V1\Job $resource
     *           Job insert response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * Job insert response.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job resource = 1;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Job
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Job insert response.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job resource = 1;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Job $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Job::class);
        $this->resource = $var;

        return $this;
    }

}
