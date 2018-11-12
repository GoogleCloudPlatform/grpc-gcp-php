<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.StreamStatus</code>
 */
class StreamStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of estimated rows in the current stream. May change over time as
     * different readers in the stream progress at rates which are relatively fast
     * or slow.
     *
     * Generated from protobuf field <code>int64 estimated_row_count = 1;</code>
     */
    private $estimated_row_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $estimated_row_count
     *           Number of estimated rows in the current stream. May change over time as
     *           different readers in the stream progress at rates which are relatively fast
     *           or slow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of estimated rows in the current stream. May change over time as
     * different readers in the stream progress at rates which are relatively fast
     * or slow.
     *
     * Generated from protobuf field <code>int64 estimated_row_count = 1;</code>
     * @return int|string
     */
    public function getEstimatedRowCount()
    {
        return $this->estimated_row_count;
    }

    /**
     * Number of estimated rows in the current stream. May change over time as
     * different readers in the stream progress at rates which are relatively fast
     * or slow.
     *
     * Generated from protobuf field <code>int64 estimated_row_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_row_count = $var;

        return $this;
    }

}
