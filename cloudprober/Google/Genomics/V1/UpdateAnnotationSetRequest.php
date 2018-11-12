<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.UpdateAnnotationSetRequest</code>
 */
class UpdateAnnotationSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the annotation set to be updated.
     *
     * Generated from protobuf field <code>string annotation_set_id = 1;</code>
     */
    private $annotation_set_id = '';
    /**
     * The new annotation set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationSet annotation_set = 2;</code>
     */
    private $annotation_set = null;
    /**
     * An optional mask specifying which fields to update. Mutable fields are
     * [name][google.genomics.v1.AnnotationSet.name],
     * [source_uri][google.genomics.v1.AnnotationSet.source_uri], and
     * [info][google.genomics.v1.AnnotationSet.info]. If unspecified, all
     * mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $annotation_set_id
     *           The ID of the annotation set to be updated.
     *     @type \Google\Genomics\V1\AnnotationSet $annotation_set
     *           The new annotation set.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           An optional mask specifying which fields to update. Mutable fields are
     *           [name][google.genomics.v1.AnnotationSet.name],
     *           [source_uri][google.genomics.v1.AnnotationSet.source_uri], and
     *           [info][google.genomics.v1.AnnotationSet.info]. If unspecified, all
     *           mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the annotation set to be updated.
     *
     * Generated from protobuf field <code>string annotation_set_id = 1;</code>
     * @return string
     */
    public function getAnnotationSetId()
    {
        return $this->annotation_set_id;
    }

    /**
     * The ID of the annotation set to be updated.
     *
     * Generated from protobuf field <code>string annotation_set_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_set_id = $var;

        return $this;
    }

    /**
     * The new annotation set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationSet annotation_set = 2;</code>
     * @return \Google\Genomics\V1\AnnotationSet
     */
    public function getAnnotationSet()
    {
        return $this->annotation_set;
    }

    /**
     * The new annotation set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationSet annotation_set = 2;</code>
     * @param \Google\Genomics\V1\AnnotationSet $var
     * @return $this
     */
    public function setAnnotationSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\AnnotationSet::class);
        $this->annotation_set = $var;

        return $this;
    }

    /**
     * An optional mask specifying which fields to update. Mutable fields are
     * [name][google.genomics.v1.AnnotationSet.name],
     * [source_uri][google.genomics.v1.AnnotationSet.source_uri], and
     * [info][google.genomics.v1.AnnotationSet.info]. If unspecified, all
     * mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * An optional mask specifying which fields to update. Mutable fields are
     * [name][google.genomics.v1.AnnotationSet.name],
     * [source_uri][google.genomics.v1.AnnotationSet.source_uri], and
     * [info][google.genomics.v1.AnnotationSet.info]. If unspecified, all
     * mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
