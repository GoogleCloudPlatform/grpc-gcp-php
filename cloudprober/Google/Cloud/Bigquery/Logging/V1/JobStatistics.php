<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job statistics that may change after a job starts.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.JobStatistics</code>
 */
class JobStatistics extends \Google\Protobuf\Internal\Message
{
    /**
     * Time when the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    private $create_time = null;
    /**
     * Time when the job started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * Time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;
    /**
     * Total bytes processed for a job.
     *
     * Generated from protobuf field <code>int64 total_processed_bytes = 4;</code>
     */
    private $total_processed_bytes = 0;
    /**
     * Processed bytes, adjusted by the job's CPU usage.
     *
     * Generated from protobuf field <code>int64 total_billed_bytes = 5;</code>
     */
    private $total_billed_bytes = 0;
    /**
     * The tier assigned by CPU-based billing.
     *
     * Generated from protobuf field <code>int32 billing_tier = 7;</code>
     */
    private $billing_tier = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time when the job was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time when the job started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Time when the job ended.
     *     @type int|string $total_processed_bytes
     *           Total bytes processed for a job.
     *     @type int|string $total_billed_bytes
     *           Processed bytes, adjusted by the job's CPU usage.
     *     @type int $billing_tier
     *           The tier assigned by CPU-based billing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * Time when the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Time when the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time when the job started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Time when the job started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Total bytes processed for a job.
     *
     * Generated from protobuf field <code>int64 total_processed_bytes = 4;</code>
     * @return int|string
     */
    public function getTotalProcessedBytes()
    {
        return $this->total_processed_bytes;
    }

    /**
     * Total bytes processed for a job.
     *
     * Generated from protobuf field <code>int64 total_processed_bytes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalProcessedBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_processed_bytes = $var;

        return $this;
    }

    /**
     * Processed bytes, adjusted by the job's CPU usage.
     *
     * Generated from protobuf field <code>int64 total_billed_bytes = 5;</code>
     * @return int|string
     */
    public function getTotalBilledBytes()
    {
        return $this->total_billed_bytes;
    }

    /**
     * Processed bytes, adjusted by the job's CPU usage.
     *
     * Generated from protobuf field <code>int64 total_billed_bytes = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalBilledBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_billed_bytes = $var;

        return $this;
    }

    /**
     * The tier assigned by CPU-based billing.
     *
     * Generated from protobuf field <code>int32 billing_tier = 7;</code>
     * @return int
     */
    public function getBillingTier()
    {
        return $this->billing_tier;
    }

    /**
     * The tier assigned by CPU-based billing.
     *
     * Generated from protobuf field <code>int32 billing_tier = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setBillingTier($var)
    {
        GPBUtil::checkInt32($var);
        $this->billing_tier = $var;

        return $this;
    }

}
