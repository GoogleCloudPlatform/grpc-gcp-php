<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A filter that merges multiple other filters using the given operator.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.CompositeFilter</code>
 */
class CompositeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.CompositeFilter.Operator op = 1;</code>
     */
    private $op = 0;
    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Filter filters = 2;</code>
     */
    private $filters;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct();
    }

    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.CompositeFilter.Operator op = 1;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.CompositeFilter.Operator op = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1beta3\CompositeFilter_Operator::class);
        $this->op = $var;

        return $this;
    }

    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Filter filters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Filter filters = 2;</code>
     * @param \Google\Cloud\Datastore\V1beta3\Filter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\Filter::class);
        $this->filters = $arr;

        return $this;
    }

}

