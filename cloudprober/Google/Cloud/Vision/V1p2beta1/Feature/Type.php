<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p2beta1\Feature;

/**
 * Type of Google Cloud Vision API feature to be extracted.
 *
 * Protobuf type <code>google.cloud.vision.v1p2beta1.Feature.Type</code>
 */
class Type
{
    /**
     * Unspecified feature type.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Run face detection.
     *
     * Generated from protobuf enum <code>FACE_DETECTION = 1;</code>
     */
    const FACE_DETECTION = 1;
    /**
     * Run landmark detection.
     *
     * Generated from protobuf enum <code>LANDMARK_DETECTION = 2;</code>
     */
    const LANDMARK_DETECTION = 2;
    /**
     * Run logo detection.
     *
     * Generated from protobuf enum <code>LOGO_DETECTION = 3;</code>
     */
    const LOGO_DETECTION = 3;
    /**
     * Run label detection.
     *
     * Generated from protobuf enum <code>LABEL_DETECTION = 4;</code>
     */
    const LABEL_DETECTION = 4;
    /**
     * Run text detection / optical character recognition (OCR). Text detection
     * is optimized for areas of text within a larger image; if the image is
     * a document, use `DOCUMENT_TEXT_DETECTION` instead.
     *
     * Generated from protobuf enum <code>TEXT_DETECTION = 5;</code>
     */
    const TEXT_DETECTION = 5;
    /**
     * Run dense text document OCR. Takes precedence when both
     * `DOCUMENT_TEXT_DETECTION` and `TEXT_DETECTION` are present.
     *
     * Generated from protobuf enum <code>DOCUMENT_TEXT_DETECTION = 11;</code>
     */
    const DOCUMENT_TEXT_DETECTION = 11;
    /**
     * Run Safe Search to detect potentially unsafe
     * or undesirable content.
     *
     * Generated from protobuf enum <code>SAFE_SEARCH_DETECTION = 6;</code>
     */
    const SAFE_SEARCH_DETECTION = 6;
    /**
     * Compute a set of image properties, such as the
     * image's dominant colors.
     *
     * Generated from protobuf enum <code>IMAGE_PROPERTIES = 7;</code>
     */
    const IMAGE_PROPERTIES = 7;
    /**
     * Run crop hints.
     *
     * Generated from protobuf enum <code>CROP_HINTS = 9;</code>
     */
    const CROP_HINTS = 9;
    /**
     * Run web detection.
     *
     * Generated from protobuf enum <code>WEB_DETECTION = 10;</code>
     */
    const WEB_DETECTION = 10;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Vision\V1p2beta1\Feature_Type::class);
