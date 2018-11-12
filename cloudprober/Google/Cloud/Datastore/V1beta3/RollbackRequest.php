<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Datastore.Rollback][google.datastore.v1beta3.Datastore.Rollback].
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.RollbackRequest</code>
 */
class RollbackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     */
    private $project_id = '';
    /**
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     */
    private $transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The ID of the project against which to make the request.
     *     @type string $transaction
     *           The transaction identifier, returned by a call to
     *           [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction identifier, returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1beta3.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

}
