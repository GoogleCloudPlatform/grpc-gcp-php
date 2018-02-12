<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Datastore.Lookup][google.datastore.v1.Datastore.Lookup].
 *
 * Generated from protobuf message <code>google.datastore.v1.LookupRequest</code>
 */
class LookupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     */
    private $project_id = '';
    /**
     * The options for this lookup request.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     */
    private $read_options = null;
    /**
     * Keys of entities to look up.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key keys = 3;</code>
     */
    private $keys;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
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
     * The options for this lookup request.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     * @return \Google\Cloud\Datastore\V1\ReadOptions
     */
    public function getReadOptions()
    {
        return $this->read_options;
    }

    /**
     * The options for this lookup request.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     * @param \Google\Cloud\Datastore\V1\ReadOptions $var
     * @return $this
     */
    public function setReadOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\ReadOptions::class);
        $this->read_options = $var;

        return $this;
    }

    /**
     * Keys of entities to look up.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key keys = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * Keys of entities to look up.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key keys = 3;</code>
     * @param \Google\Cloud\Datastore\V1\Key[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\Key::class);
        $this->keys = $arr;

        return $this;
    }

}

