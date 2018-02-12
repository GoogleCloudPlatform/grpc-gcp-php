<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/publish_build_event.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * States which event has been committed. Any failure to commit will cause
 * RPC errors, hence not recorded by this proto.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.PublishBuildToolEventStreamResponse</code>
 */
class PublishBuildToolEventStreamResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The stream that contains this event.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     */
    private $stream_id = null;
    /**
     * The sequence number of this event that has been committed.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2;</code>
     */
    private $sequence_number = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Build\V1\PublishBuildEvent::initOnce();
        parent::__construct();
    }

    /**
     * The stream that contains this event.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     * @return \Google\Devtools\Build\V1\StreamId
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * The stream that contains this event.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.StreamId stream_id = 1;</code>
     * @param \Google\Devtools\Build\V1\StreamId $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\StreamId::class);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * The sequence number of this event that has been committed.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2;</code>
     * @return int|string
     */
    public function getSequenceNumber()
    {
        return $this->sequence_number;
    }

    /**
     * The sequence number of this event that has been committed.
     *
     * Generated from protobuf field <code>int64 sequence_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->sequence_number = $var;

        return $this;
    }

}

