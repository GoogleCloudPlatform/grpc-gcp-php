<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.BatchCreateReadSessionStreamsResponse</code>
 */
class BatchCreateReadSessionStreamsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Newly added streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1beta1.Stream streams = 1;</code>
     */
    private $streams;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Storage\V1beta1\Stream[]|\Google\Protobuf\Internal\RepeatedField $streams
     *           Newly added streams.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Newly added streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1beta1.Stream streams = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * Newly added streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1beta1.Stream streams = 1;</code>
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\Stream[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigquery\Storage\V1beta1\Stream::class);
        $this->streams = $arr;

        return $this;
    }

}
