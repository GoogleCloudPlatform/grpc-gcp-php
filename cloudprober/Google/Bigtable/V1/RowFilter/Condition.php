<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_data.proto

namespace Google\Bigtable\V1\RowFilter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A RowFilter which evaluates one of two possible RowFilters, depending on
 * whether or not a predicate RowFilter outputs any cells from the input row.
 * IMPORTANT NOTE: The predicate filter does not execute atomically with the
 * true and false filters, which may lead to inconsistent or unexpected
 * results. Additionally, Condition filters have poor performance, especially
 * when filters are set for the false condition.
 *
 * Generated from protobuf message <code>google.bigtable.v1.RowFilter.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * If "predicate_filter" outputs any cells, then "true_filter" will be
     * evaluated on the input row. Otherwise, "false_filter" will be evaluated.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 1;</code>
     */
    private $predicate_filter = null;
    /**
     * The filter to apply to the input row if "predicate_filter" returns any
     * results. If not provided, no results will be returned in the true case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter true_filter = 2;</code>
     */
    private $true_filter = null;
    /**
     * The filter to apply to the input row if "predicate_filter" does not
     * return any results. If not provided, no results will be returned in the
     * false case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter false_filter = 3;</code>
     */
    private $false_filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Bigtable\V1\RowFilter $predicate_filter
     *           If "predicate_filter" outputs any cells, then "true_filter" will be
     *           evaluated on the input row. Otherwise, "false_filter" will be evaluated.
     *     @type \Google\Bigtable\V1\RowFilter $true_filter
     *           The filter to apply to the input row if "predicate_filter" returns any
     *           results. If not provided, no results will be returned in the true case.
     *     @type \Google\Bigtable\V1\RowFilter $false_filter
     *           The filter to apply to the input row if "predicate_filter" does not
     *           return any results. If not provided, no results will be returned in the
     *           false case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V1\BigtableData::initOnce();
        parent::__construct($data);
    }

    /**
     * If "predicate_filter" outputs any cells, then "true_filter" will be
     * evaluated on the input row. Otherwise, "false_filter" will be evaluated.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 1;</code>
     * @return \Google\Bigtable\V1\RowFilter
     */
    public function getPredicateFilter()
    {
        return $this->predicate_filter;
    }

    /**
     * If "predicate_filter" outputs any cells, then "true_filter" will be
     * evaluated on the input row. Otherwise, "false_filter" will be evaluated.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter predicate_filter = 1;</code>
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
     * The filter to apply to the input row if "predicate_filter" returns any
     * results. If not provided, no results will be returned in the true case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter true_filter = 2;</code>
     * @return \Google\Bigtable\V1\RowFilter
     */
    public function getTrueFilter()
    {
        return $this->true_filter;
    }

    /**
     * The filter to apply to the input row if "predicate_filter" returns any
     * results. If not provided, no results will be returned in the true case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter true_filter = 2;</code>
     * @param \Google\Bigtable\V1\RowFilter $var
     * @return $this
     */
    public function setTrueFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\V1\RowFilter::class);
        $this->true_filter = $var;

        return $this;
    }

    /**
     * The filter to apply to the input row if "predicate_filter" does not
     * return any results. If not provided, no results will be returned in the
     * false case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter false_filter = 3;</code>
     * @return \Google\Bigtable\V1\RowFilter
     */
    public function getFalseFilter()
    {
        return $this->false_filter;
    }

    /**
     * The filter to apply to the input row if "predicate_filter" does not
     * return any results. If not provided, no results will be returned in the
     * false case.
     *
     * Generated from protobuf field <code>.google.bigtable.v1.RowFilter false_filter = 3;</code>
     * @param \Google\Bigtable\V1\RowFilter $var
     * @return $this
     */
    public function setFalseFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\V1\RowFilter::class);
        $this->false_filter = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Condition::class, \Google\Bigtable\V1\RowFilter_Condition::class);
