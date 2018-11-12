<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableService.CheckAndMutateRowRequest
 *
 * Generated from protobuf message <code>google.bigtable.v1.CheckAndMutateRowRequest</code>
 */
class CheckAndMutateRowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table to which the conditional mutation should be
     * applied.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     */
    private $table_name = '';
    /**
     * The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2;</code>
     */
    private $row_key = '';
    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either "true_mutations" or
     * "false_mutations" will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 6;</code>
     */
    private $predicate_filter = null;
    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * yields at least one cell when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "false_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation true_mutations = 4;</code>
     */
    private $true_mutations;
    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * does not yield any cells when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "true_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation false_mutations = 5;</code>
     */
    private $false_mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           The unique name of the table to which the conditional mutation should be
     *           applied.
     *     @type string $row_key
     *           The key of the row to which the conditional mutation should be applied.
     *     @type \Google\Bigtable\V1\RowFilter $predicate_filter
     *           The filter to be applied to the contents of the specified row. Depending
     *           on whether or not any results are yielded, either "true_mutations" or
     *           "false_mutations" will be executed. If unset, checks that the row contains
     *           any values at all.
     *     @type \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $true_mutations
     *           Changes to be atomically applied to the specified row if "predicate_filter"
     *           yields at least one cell when applied to "row_key". Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if "false_mutations" is empty, and at most
     *           100000.
     *     @type \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $false_mutations
     *           Changes to be atomically applied to the specified row if "predicate_filter"
     *           does not yield any cells when applied to "row_key". Entries are applied in
     *           order, meaning that earlier mutations can be masked by later ones.
     *           Must contain at least one entry if "true_mutations" is empty, and at most
     *           100000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the table to which the conditional mutation should be
     * applied.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * The unique name of the table to which the conditional mutation should be
     * applied.
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

    /**
     * The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2;</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * The key of the row to which the conditional mutation should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->row_key = $var;

        return $this;
    }

    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either "true_mutations" or
     * "false_mutations" will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 6;</code>
     * @return \Google\Bigtable\V1\RowFilter
     */
    public function getPredicateFilter()
    {
        return $this->predicate_filter;
    }

    /**
     * The filter to be applied to the contents of the specified row. Depending
     * on whether or not any results are yielded, either "true_mutations" or
     * "false_mutations" will be executed. If unset, checks that the row contains
     * any values at all.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 6;</code>
     * @param \Google\Bigtable\V1\RowFilter $var
     * @return $this
     */
    public function setPredicateFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\V1\RowFilter::class);
        $this->predicate_filter = $var;

        return $this;
    }

    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * yields at least one cell when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "false_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation true_mutations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrueMutations()
    {
        return $this->true_mutations;
    }

    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * yields at least one cell when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "false_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation true_mutations = 4;</code>
     * @param \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrueMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\Mutation::class);
        $this->true_mutations = $arr;

        return $this;
    }

    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * does not yield any cells when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "true_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation false_mutations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFalseMutations()
    {
        return $this->false_mutations;
    }

    /**
     * Changes to be atomically applied to the specified row if "predicate_filter"
     * does not yield any cells when applied to "row_key". Entries are applied in
     * order, meaning that earlier mutations can be masked by later ones.
     * Must contain at least one entry if "true_mutations" is empty, and at most
     * 100000.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation false_mutations = 5;</code>
     * @param \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFalseMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\Mutation::class);
        $this->false_mutations = $arr;

        return $this;
    }

}
