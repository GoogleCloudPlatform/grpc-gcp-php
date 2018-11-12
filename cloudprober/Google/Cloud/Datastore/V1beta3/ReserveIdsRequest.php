<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Datastore.ReserveIds][google.datastore.v1beta3.Datastore.ReserveIds].
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.ReserveIdsRequest</code>
 */
class ReserveIdsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     */
    private $project_id = '';
    /**
     * If not empty, the ID of the database against which to make the request.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     */
    private $database_id = '';
    /**
     * A list of keys with complete key paths whose numeric IDs should not be
     * auto-allocated.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     */
    private $keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The ID of the project against which to make the request.
     *     @type string $database_id
     *           If not empty, the ID of the database against which to make the request.
     *     @type \Google\Cloud\Datastore\V1beta3\Key[]|\Google\Protobuf\Internal\RepeatedField $keys
     *           A list of keys with complete key paths whose numeric IDs should not be
     *           auto-allocated.
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
     * If not empty, the ID of the database against which to make the request.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->database_id;
    }

    /**
     * If not empty, the ID of the database against which to make the request.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_id = $var;

        return $this;
    }

    /**
     * A list of keys with complete key paths whose numeric IDs should not be
     * auto-allocated.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * A list of keys with complete key paths whose numeric IDs should not be
     * auto-allocated.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.Key keys = 1;</code>
     * @param \Google\Cloud\Datastore\V1beta3\Key[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\Key::class);
        $this->keys = $arr;

        return $this;
    }

}
