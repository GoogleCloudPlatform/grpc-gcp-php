<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for
 * [ContentAddressableStorage.GetTree][google.devtools.remoteexecution.v1test.ContentAddressableStorage.GetTree].
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.GetTreeRequest</code>
 */
class GetTreeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The instance of the execution system to operate against. A server may
     * support multiple instances of the execution system (with their own workers,
     * storage, caches, etc.). The server MAY require use of this field to select
     * between them in an implementation-defined fashion, otherwise it can be
     * omitted.
     *
     * Generated from protobuf field <code>string instance_name = 1;</code>
     */
    private $instance_name = '';
    /**
     * The digest of the root, which must be an encoded
     * [Directory][google.devtools.remoteexecution.v1test.Directory] message
     * stored in the
     * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage].
     *
     * Generated from protobuf field <code>.google.devtools.remoteexecution.v1test.Digest root_digest = 2;</code>
     */
    private $root_digest = null;
    /**
     * A maximum page size to request. If present, the server will request no more
     * than this many items. Regardless of whether a page size is specified, the
     * server may place its own limit on the number of items to be returned and
     * require the client to retrieve more items using a subsequent request.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A page token, which must be a value received in a previous
     * [GetTreeResponse][google.devtools.remoteexecution.v1test.GetTreeResponse].
     * If present, the server will use it to return the following page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct();
    }

    /**
     * The instance of the execution system to operate against. A server may
     * support multiple instances of the execution system (with their own workers,
     * storage, caches, etc.). The server MAY require use of this field to select
     * between them in an implementation-defined fashion, otherwise it can be
     * omitted.
     *
     * Generated from protobuf field <code>string instance_name = 1;</code>
     * @return string
     */
    public function getInstanceName()
    {
        return $this->instance_name;
    }

    /**
     * The instance of the execution system to operate against. A server may
     * support multiple instances of the execution system (with their own workers,
     * storage, caches, etc.). The server MAY require use of this field to select
     * between them in an implementation-defined fashion, otherwise it can be
     * omitted.
     *
     * Generated from protobuf field <code>string instance_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_name = $var;

        return $this;
    }

    /**
     * The digest of the root, which must be an encoded
     * [Directory][google.devtools.remoteexecution.v1test.Directory] message
     * stored in the
     * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage].
     *
     * Generated from protobuf field <code>.google.devtools.remoteexecution.v1test.Digest root_digest = 2;</code>
     * @return \Google\Devtools\Remoteexecution\V1test\Digest
     */
    public function getRootDigest()
    {
        return $this->root_digest;
    }

    /**
     * The digest of the root, which must be an encoded
     * [Directory][google.devtools.remoteexecution.v1test.Directory] message
     * stored in the
     * [ContentAddressableStorage][google.devtools.remoteexecution.v1test.ContentAddressableStorage].
     *
     * Generated from protobuf field <code>.google.devtools.remoteexecution.v1test.Digest root_digest = 2;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\Digest $var
     * @return $this
     */
    public function setRootDigest($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Remoteexecution\V1test\Digest::class);
        $this->root_digest = $var;

        return $this;
    }

    /**
     * A maximum page size to request. If present, the server will request no more
     * than this many items. Regardless of whether a page size is specified, the
     * server may place its own limit on the number of items to be returned and
     * require the client to retrieve more items using a subsequent request.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A maximum page size to request. If present, the server will request no more
     * than this many items. Regardless of whether a page size is specified, the
     * server may place its own limit on the number of items to be returned and
     * require the client to retrieve more items using a subsequent request.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, which must be a value received in a previous
     * [GetTreeResponse][google.devtools.remoteexecution.v1test.GetTreeResponse].
     * If present, the server will use it to return the following page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, which must be a value received in a previous
     * [GetTreeResponse][google.devtools.remoteexecution.v1test.GetTreeResponse].
     * If present, the server will use it to return the following page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

