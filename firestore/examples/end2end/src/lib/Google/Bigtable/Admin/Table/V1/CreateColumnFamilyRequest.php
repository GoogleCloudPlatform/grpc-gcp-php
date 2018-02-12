<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_service_messages.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.bigtable.admin.table.v1.CreateColumnFamilyRequest</code>
 */
class CreateColumnFamilyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table in which to create the new column family.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "<table_name>/columnFamilies/foobar".
     *
     * Generated from protobuf field <code>string column_family_id = 2;</code>
     */
    private $column_family_id = '';
    /**
     * The column family to create. The `name` field must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     */
    private $column_family = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableServiceMessages::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the table in which to create the new column family.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the table in which to create the new column family.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "<table_name>/columnFamilies/foobar".
     *
     * Generated from protobuf field <code>string column_family_id = 2;</code>
     * @return string
     */
    public function getColumnFamilyId()
    {
        return $this->column_family_id;
    }

    /**
     * The name by which the new column family should be referred to within the
     * table, e.g. "foobar" rather than "<table_name>/columnFamilies/foobar".
     *
     * Generated from protobuf field <code>string column_family_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnFamilyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_family_id = $var;

        return $this;
    }

    /**
     * The column family to create. The `name` field must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     * @return \Google\Bigtable\Admin\Table\V1\ColumnFamily
     */
    public function getColumnFamily()
    {
        return $this->column_family;
    }

    /**
     * The column family to create. The `name` field must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.table.v1.ColumnFamily column_family = 3;</code>
     * @param \Google\Bigtable\Admin\Table\V1\ColumnFamily $var
     * @return $this
     */
    public function setColumnFamily($var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\Table\V1\ColumnFamily::class);
        $this->column_family = $var;

        return $this;
    }

}

