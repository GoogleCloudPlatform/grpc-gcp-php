<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.MergeVariantsRequest</code>
 */
class MergeVariantsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The destination variant set.
     *
     * Generated from protobuf field <code>string variant_set_id = 1;</code>
     */
    private $variant_set_id = '';
    /**
     * The variants to be merged with existing variants.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     */
    private $variants;
    /**
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     *
     * Generated from protobuf field <code>map<string, .google.genomics.v1.InfoMergeOperation> info_merge_config = 3;</code>
     */
    private $info_merge_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $variant_set_id
     *           The destination variant set.
     *     @type \Google\Genomics\V1\Variant[]|\Google\Protobuf\Internal\RepeatedField $variants
     *           The variants to be merged with existing variants.
     *     @type array|\Google\Protobuf\Internal\MapField $info_merge_config
     *           A mapping between info field keys and the InfoMergeOperations to
     *           be performed on them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct($data);
    }

    /**
     * The destination variant set.
     *
     * Generated from protobuf field <code>string variant_set_id = 1;</code>
     * @return string
     */
    public function getVariantSetId()
    {
        return $this->variant_set_id;
    }

    /**
     * The destination variant set.
     *
     * Generated from protobuf field <code>string variant_set_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVariantSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->variant_set_id = $var;

        return $this;
    }

    /**
     * The variants to be merged with existing variants.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * The variants to be merged with existing variants.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 2;</code>
     * @param \Google\Genomics\V1\Variant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Variant::class);
        $this->variants = $arr;

        return $this;
    }

    /**
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     *
     * Generated from protobuf field <code>map<string, .google.genomics.v1.InfoMergeOperation> info_merge_config = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInfoMergeConfig()
    {
        return $this->info_merge_config;
    }

    /**
     * A mapping between info field keys and the InfoMergeOperations to
     * be performed on them.
     *
     * Generated from protobuf field <code>map<string, .google.genomics.v1.InfoMergeOperation> info_merge_config = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInfoMergeConfig($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Genomics\V1\InfoMergeOperation::class);
        $this->info_merge_config = $arr;

        return $this;
    }

}
