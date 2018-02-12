<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_data.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a non-contiguous set of rows.
 *
 * Generated from protobuf message <code>google.bigtable.v1.RowSet</code>
 */
class RowSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Single rows included in the set.
     *
     * Generated from protobuf field <code>repeated bytes row_keys = 1;</code>
     */
    private $row_keys;
    /**
     * Contiguous row ranges included in the set.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.RowRange row_ranges = 2;</code>
     */
    private $row_ranges;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V1\BigtableData::initOnce();
        parent::__construct();
    }

    /**
     * Single rows included in the set.
     *
     * Generated from protobuf field <code>repeated bytes row_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRowKeys()
    {
        return $this->row_keys;
    }

    /**
     * Single rows included in the set.
     *
     * Generated from protobuf field <code>repeated bytes row_keys = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRowKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->row_keys = $arr;

        return $this;
    }

    /**
     * Contiguous row ranges included in the set.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.RowRange row_ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRowRanges()
    {
        return $this->row_ranges;
    }

    /**
     * Contiguous row ranges included in the set.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.RowRange row_ranges = 2;</code>
     * @param \Google\Bigtable\V1\RowRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRowRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\RowRange::class);
        $this->row_ranges = $arr;

        return $this;
    }

}

