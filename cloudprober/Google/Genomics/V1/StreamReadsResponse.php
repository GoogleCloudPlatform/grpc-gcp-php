<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.StreamReadsResponse</code>
 */
class StreamReadsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     */
    private $alignments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Genomics\V1\Read[]|\Google\Protobuf\Internal\RepeatedField $alignments
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlignments()
    {
        return $this->alignments;
    }

    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Read alignments = 1;</code>
     * @param \Google\Genomics\V1\Read[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlignments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Read::class);
        $this->alignments = $arr;

        return $this;
    }

}
