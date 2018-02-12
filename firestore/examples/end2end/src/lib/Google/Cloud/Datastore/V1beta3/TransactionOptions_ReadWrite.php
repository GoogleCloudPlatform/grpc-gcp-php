<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options specific to read / write transactions.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.TransactionOptions.ReadWrite</code>
 */
class TransactionOptions_ReadWrite extends \Google\Protobuf\Internal\Message
{
    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     */
    private $previous_transaction = '';

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     * @return string
     */
    public function getPreviousTransaction()
    {
        return $this->previous_transaction;
    }

    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->previous_transaction = $var;

        return $this;
    }

}

