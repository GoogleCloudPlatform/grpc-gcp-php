<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The variant data import response.
 *
 * Generated from protobuf message <code>google.genomics.v1.ImportVariantsResponse</code>
 */
class ImportVariantsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * IDs of the call sets created during the import.
     *
     * Generated from protobuf field <code>repeated string call_set_ids = 1;</code>
     */
    private $call_set_ids;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct();
    }

    /**
     * IDs of the call sets created during the import.
     *
     * Generated from protobuf field <code>repeated string call_set_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCallSetIds()
    {
        return $this->call_set_ids;
    }

    /**
     * IDs of the call sets created during the import.
     *
     * Generated from protobuf field <code>repeated string call_set_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCallSetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->call_set_ids = $arr;

        return $this;
    }

}

