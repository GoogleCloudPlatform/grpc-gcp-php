<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for
 * [ContentAddressableStorage.GetTree][google.devtools.remoteexecution.v1test.ContentAddressableStorage.GetTree].
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.GetTreeResponse</code>
 */
class GetTreeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The directories descended from the requested root.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Directory directories = 1;</code>
     */
    private $directories;
    /**
     * If present, signifies that there are more results which the client can
     * retrieve by passing this as the page_token in a subsequent
     * [request][google.devtools.remoteexecution.v1test.GetTreeRequest].
     * If empty, signifies that this is the last page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct();
    }

    /**
     * The directories descended from the requested root.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Directory directories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectories()
    {
        return $this->directories;
    }

    /**
     * The directories descended from the requested root.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.Directory directories = 1;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\Directory[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteexecution\V1test\Directory::class);
        $this->directories = $arr;

        return $this;
    }

    /**
     * If present, signifies that there are more results which the client can
     * retrieve by passing this as the page_token in a subsequent
     * [request][google.devtools.remoteexecution.v1test.GetTreeRequest].
     * If empty, signifies that this is the last page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If present, signifies that there are more results which the client can
     * retrieve by passing this as the page_token in a subsequent
     * [request][google.devtools.remoteexecution.v1test.GetTreeRequest].
     * If empty, signifies that this is the last page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

