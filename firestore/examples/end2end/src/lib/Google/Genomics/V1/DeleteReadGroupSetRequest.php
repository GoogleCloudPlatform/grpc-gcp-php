<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.DeleteReadGroupSetRequest</code>
 */
class DeleteReadGroupSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 1;</code>
     */
    private $read_group_set_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct();
    }

    /**
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 1;</code>
     * @return string
     */
    public function getReadGroupSetId()
    {
        return $this->read_group_set_id;
    }

    /**
     * The ID of the read group set to be deleted. The caller must have WRITE
     * permissions to the dataset associated with this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReadGroupSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_group_set_id = $var;

        return $this;
    }

}

