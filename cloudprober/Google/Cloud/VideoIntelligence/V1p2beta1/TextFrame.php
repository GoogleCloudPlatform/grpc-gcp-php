<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1p2beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video frame level annotation results for text annotation (OCR).
 * Contains information regarding timestamp and bounding box locations for the
 * frames containing detected OCR text snippets.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1p2beta1.TextFrame</code>
 */
class TextFrame extends \Google\Protobuf\Internal\Message
{
    /**
     * Bounding polygon of the detected text for this frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.NormalizedBoundingPoly rotated_bounding_box = 1;</code>
     */
    private $rotated_bounding_box = null;
    /**
     * Timestamp of this frame.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     */
    private $time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1p2beta1\NormalizedBoundingPoly $rotated_bounding_box
     *           Bounding polygon of the detected text for this frame.
     *     @type \Google\Protobuf\Duration $time_offset
     *           Timestamp of this frame.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1P2Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Bounding polygon of the detected text for this frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.NormalizedBoundingPoly rotated_bounding_box = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1p2beta1\NormalizedBoundingPoly
     */
    public function getRotatedBoundingBox()
    {
        return $this->rotated_bounding_box;
    }

    /**
     * Bounding polygon of the detected text for this frame.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.NormalizedBoundingPoly rotated_bounding_box = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1p2beta1\NormalizedBoundingPoly $var
     * @return $this
     */
    public function setRotatedBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1p2beta1\NormalizedBoundingPoly::class);
        $this->rotated_bounding_box = $var;

        return $this;
    }

    /**
     * Timestamp of this frame.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * Timestamp of this frame.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->time_offset = $var;

        return $this;
    }

}
