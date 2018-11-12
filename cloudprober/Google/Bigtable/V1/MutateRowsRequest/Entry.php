<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1\MutateRowsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.bigtable.v1.MutateRowsRequest.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     */
    private $row_key = '';
    /**
     * Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * At least one mutation must be specified.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation mutations = 2;</code>
     */
    private $mutations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $row_key
     *           The key of the row to which the `mutations` should be applied.
     *     @type \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $mutations
     *           Changes to be atomically applied to the specified row. Mutations are
     *           applied in order, meaning that earlier mutations can be masked by
     *           later ones.
     *           At least one mutation must be specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
     * @return string
     */
    public function getRowKey()
    {
        return $this->row_key;
    }

    /**
     * The key of the row to which the `mutations` should be applied.
     *
     * Generated from protobuf field <code>bytes row_key = 1;</code>
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
     * Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * At least one mutation must be specified.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation mutations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * Changes to be atomically applied to the specified row. Mutations are
     * applied in order, meaning that earlier mutations can be masked by
     * later ones.
     * At least one mutation must be specified.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.Mutation mutations = 2;</code>
     * @param \Google\Bigtable\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Entry::class, \Google\Bigtable\V1\MutateRowsRequest_Entry::class);
