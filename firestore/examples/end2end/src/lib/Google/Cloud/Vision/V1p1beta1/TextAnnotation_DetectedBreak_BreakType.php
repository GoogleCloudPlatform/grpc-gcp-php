<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p1beta1/text_annotation.proto

namespace Google\Cloud\Vision\V1p1beta1;

/**
 * Enum to denote the type of break found. New line, space etc.
 *
 * Protobuf enum <code>Google\Cloud\Vision\V1p1beta1\TextAnnotation\DetectedBreak\BreakType</code>
 */
class TextAnnotation_DetectedBreak_BreakType
{
    /**
     * Unknown break label type.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Regular space.
     *
     * Generated from protobuf enum <code>SPACE = 1;</code>
     */
    const SPACE = 1;
    /**
     * Sure space (very wide).
     *
     * Generated from protobuf enum <code>SURE_SPACE = 2;</code>
     */
    const SURE_SPACE = 2;
    /**
     * Line-wrapping break.
     *
     * Generated from protobuf enum <code>EOL_SURE_SPACE = 3;</code>
     */
    const EOL_SURE_SPACE = 3;
    /**
     * End-line hyphen that is not present in text; does not co-occur with
     * `SPACE`, `LEADER_SPACE`, or `LINE_BREAK`.
     *
     * Generated from protobuf enum <code>HYPHEN = 4;</code>
     */
    const HYPHEN = 4;
    /**
     * Line break that ends a paragraph.
     *
     * Generated from protobuf enum <code>LINE_BREAK = 5;</code>
     */
    const LINE_BREAK = 5;
}

