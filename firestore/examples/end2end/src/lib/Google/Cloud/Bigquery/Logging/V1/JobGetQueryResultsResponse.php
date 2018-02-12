<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job getQueryResults response.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.JobGetQueryResultsResponse</code>
 */
class JobGetQueryResultsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of results in query results.
     *
     * Generated from protobuf field <code>uint64 total_results = 1;</code>
     */
    private $total_results = 0;
    /**
     * The job that was created to run the query.
     * It completed if `job.status.state` is `DONE`.
     * It failed if `job.status.errorResult` is also present.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     */
    private $job = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct();
    }

    /**
     * Total number of results in query results.
     *
     * Generated from protobuf field <code>uint64 total_results = 1;</code>
     * @return int|string
     */
    public function getTotalResults()
    {
        return $this->total_results;
    }

    /**
     * Total number of results in query results.
     *
     * Generated from protobuf field <code>uint64 total_results = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalResults($var)
    {
        GPBUtil::checkUint64($var);
        $this->total_results = $var;

        return $this;
    }

    /**
     * The job that was created to run the query.
     * It completed if `job.status.state` is `DONE`.
     * It failed if `job.status.errorResult` is also present.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * The job that was created to run the query.
     * It completed if `job.status.state` is `DONE`.
     * It failed if `job.status.errorResult` is also present.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Job::class);
        $this->job = $var;

        return $this;
    }

}

