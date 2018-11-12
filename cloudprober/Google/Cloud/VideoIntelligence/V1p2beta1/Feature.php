<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1p2beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1p2beta1;

/**
 * Video annotation feature.
 *
 * Protobuf type <code>google.cloud.videointelligence.v1p2beta1.Feature</code>
 */
class Feature
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>FEATURE_UNSPECIFIED = 0;</code>
     */
    const FEATURE_UNSPECIFIED = 0;
    /**
     * Label detection. Detect objects, such as dog or flower.
     *
     * Generated from protobuf enum <code>LABEL_DETECTION = 1;</code>
     */
    const LABEL_DETECTION = 1;
    /**
     * Shot change detection.
     *
     * Generated from protobuf enum <code>SHOT_CHANGE_DETECTION = 2;</code>
     */
    const SHOT_CHANGE_DETECTION = 2;
    /**
     * Explicit content detection.
     *
     * Generated from protobuf enum <code>EXPLICIT_CONTENT_DETECTION = 3;</code>
     */
    const EXPLICIT_CONTENT_DETECTION = 3;
    /**
     * OCR text detection and tracking.
     *
     * Generated from protobuf enum <code>TEXT_DETECTION = 7;</code>
     */
    const TEXT_DETECTION = 7;
    /**
     * Object detection and tracking.
     *
     * Generated from protobuf enum <code>OBJECT_TRACKING = 9;</code>
     */
    const OBJECT_TRACKING = 9;
}
