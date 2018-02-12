<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of fetching an entity from Datastore.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.EntityResult</code>
 */
class EntityResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The resulting entity.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Entity entity = 1;</code>
     */
    private $entity = null;
    /**
     * The version of the entity, a strictly positive number that monotonically
     * increases with changes to the entity.
     * This field is set for [`FULL`][google.datastore.v1beta3.EntityResult.ResultType.FULL] entity
     * results.
     * For [missing][google.datastore.v1beta3.LookupResponse.missing] entities in `LookupResponse`, this
     * is the version of the snapshot that was used to look up the entity, and it
     * is always set except for eventually consistent reads.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     */
    private $version = 0;
    /**
     * A cursor that points to the position after the result entity.
     * Set only when the `EntityResult` is part of a `QueryResultBatch` message.
     *
     * Generated from protobuf field <code>bytes cursor = 3;</code>
     */
    private $cursor = '';

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct();
    }

    /**
     * The resulting entity.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Entity entity = 1;</code>
     * @return \Google\Cloud\Datastore\V1beta3\Entity
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * The resulting entity.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Entity entity = 1;</code>
     * @param \Google\Cloud\Datastore\V1beta3\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1beta3\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * The version of the entity, a strictly positive number that monotonically
     * increases with changes to the entity.
     * This field is set for [`FULL`][google.datastore.v1beta3.EntityResult.ResultType.FULL] entity
     * results.
     * For [missing][google.datastore.v1beta3.LookupResponse.missing] entities in `LookupResponse`, this
     * is the version of the snapshot that was used to look up the entity, and it
     * is always set except for eventually consistent reads.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the entity, a strictly positive number that monotonically
     * increases with changes to the entity.
     * This field is set for [`FULL`][google.datastore.v1beta3.EntityResult.ResultType.FULL] entity
     * results.
     * For [missing][google.datastore.v1beta3.LookupResponse.missing] entities in `LookupResponse`, this
     * is the version of the snapshot that was used to look up the entity, and it
     * is always set except for eventually consistent reads.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * A cursor that points to the position after the result entity.
     * Set only when the `EntityResult` is part of a `QueryResultBatch` message.
     *
     * Generated from protobuf field <code>bytes cursor = 3;</code>
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * A cursor that points to the position after the result entity.
     * Set only when the `EntityResult` is part of a `QueryResultBatch` message.
     *
     * Generated from protobuf field <code>bytes cursor = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, False);
        $this->cursor = $var;

        return $this;
    }

}

