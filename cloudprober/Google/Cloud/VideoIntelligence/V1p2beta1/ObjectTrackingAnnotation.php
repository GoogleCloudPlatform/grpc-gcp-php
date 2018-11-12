<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1p2beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotations corresponding to one tracked object.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1p2beta1.ObjectTrackingAnnotation</code>
 */
class ObjectTrackingAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Entity to specify the object category that this track is labeled as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.Entity entity = 1;</code>
     */
    private $entity = null;
    /**
     * Object category's labeling confidence of this track.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    private $confidence = 0.0;
    /**
     * Information corresponding to all frames where this object track appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p2beta1.ObjectTrackingFrame frames = 2;</code>
     */
    private $frames;
    /**
     * Each object track corresponds to one video segment where it appears.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.VideoSegment segment = 3;</code>
     */
    private $segment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1p2beta1\Entity $entity
     *           Entity to specify the object category that this track is labeled as.
     *     @type float $confidence
     *           Object category's labeling confidence of this track.
     *     @type \Google\Cloud\VideoIntelligence\V1p2beta1\ObjectTrackingFrame[]|\Google\Protobuf\Internal\RepeatedField $frames
     *           Information corresponding to all frames where this object track appears.
     *     @type \Google\Cloud\VideoIntelligence\V1p2beta1\VideoSegment $segment
     *           Each object track corresponds to one video segment where it appears.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1P2Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Entity to specify the object category that this track is labeled as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.Entity entity = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1p2beta1\Entity
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Entity to specify the object category that this track is labeled as.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.Entity entity = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1p2beta1\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1p2beta1\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Object category's labeling confidence of this track.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Object category's labeling confidence of this track.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * Information corresponding to all frames where this object track appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p2beta1.ObjectTrackingFrame frames = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * Information corresponding to all frames where this object track appears.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1p2beta1.ObjectTrackingFrame frames = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1p2beta1\ObjectTrackingFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1p2beta1\ObjectTrackingFrame::class);
        $this->frames = $arr;

        return $this;
    }

    /**
     * Each object track corresponds to one video segment where it appears.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.VideoSegment segment = 3;</code>
     * @return \Google\Cloud\VideoIntelligence\V1p2beta1\VideoSegment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Each object track corresponds to one video segment where it appears.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1p2beta1.VideoSegment segment = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1p2beta1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1p2beta1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

}
