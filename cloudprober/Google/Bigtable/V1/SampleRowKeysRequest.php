<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableService.SampleRowKeys.
 *
 * Generated from protobuf message <code>google.bigtable.v1.SampleRowKeysRequest</code>
 */
class SampleRowKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table from which to sample row keys.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     */
    private $table_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           The unique name of the table from which to sample row keys.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the table from which to sample row keys.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * The unique name of the table from which to sample row keys.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

}
