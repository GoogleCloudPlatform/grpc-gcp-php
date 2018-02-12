<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The options shared by read requests.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.ReadOptions</code>
 */
class ReadOptions extends \Google\Protobuf\Internal\Message
{
    protected $consistency_type;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.ReadOptions.ReadConsistency read_consistency = 1;</code>
     * @return int
     */
    public function getReadConsistency()
    {
        return $this->readOneof(1);
    }

    /**
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.ReadOptions.ReadConsistency read_consistency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReadConsistency($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1beta3\ReadOptions_ReadConsistency::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(2);
    }

    /**
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencyType()
    {
        return $this->whichOneof("consistency_type");
    }

}

