<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1beta1/datastore_admin.proto

namespace Google\Datastore\Admin\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifies a subset of entities in a project. This is specified as
 * combinations of kinds and namespaces (either or both of which may be all, as
 * described in the following examples).
 * Example usage:
 * Entire project:
 *   kinds=[], namespace_ids=[]
 * Kinds Foo and Bar in all namespaces:
 *   kinds=['Foo', 'Bar'], namespace_ids=[]
 * Kinds Foo and Bar only in the default namespace:
 *   kinds=['Foo', 'Bar'], namespace_ids=['']
 * Kinds Foo and Bar in both the default and Baz namespaces:
 *   kinds=['Foo', 'Bar'], namespace_ids=['', 'Baz']
 * The entire Baz namespace:
 *   kinds=[], namespace_ids=['Baz']
 *
 * Generated from protobuf message <code>google.datastore.admin.v1beta1.EntityFilter</code>
 */
class EntityFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * If empty, then this represents all kinds.
     *
     * Generated from protobuf field <code>repeated string kinds = 1;</code>
     */
    private $kinds;
    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for projects that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the project has data in non-default namespaces, but doesn't want to
     * include them.
     * Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 2;</code>
     */
    private $namespace_ids;

    public function __construct() {
        \GPBMetadata\Google\Datastore\Admin\V1Beta1\DatastoreAdmin::initOnce();
        parent::__construct();
    }

    /**
     * If empty, then this represents all kinds.
     *
     * Generated from protobuf field <code>repeated string kinds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKinds()
    {
        return $this->kinds;
    }

    /**
     * If empty, then this represents all kinds.
     *
     * Generated from protobuf field <code>repeated string kinds = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKinds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->kinds = $arr;

        return $this;
    }

    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for projects that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the project has data in non-default namespaces, but doesn't want to
     * include them.
     * Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespaceIds()
    {
        return $this->namespace_ids;
    }

    /**
     * An empty list represents all namespaces. This is the preferred
     * usage for projects that don't use namespaces.
     * An empty string element represents the default namespace. This should be
     * used if the project has data in non-default namespaces, but doesn't want to
     * include them.
     * Each namespace in this list must be unique.
     *
     * Generated from protobuf field <code>repeated string namespace_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespaceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->namespace_ids = $arr;

        return $this;
    }

}

