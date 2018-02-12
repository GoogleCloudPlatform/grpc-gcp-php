<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListWaiters()` method.
 *
 * Generated from protobuf message <code>google.cloud.runtimeconfig.v1beta1.ListWaitersRequest</code>
 */
class ListWaitersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The path to the configuration for which you want to get a list of waiters.
     * The configuration must exist beforehand; the path must by in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Specifies the number of results to return per page. If there are fewer
     * elements than the specified number, returns all elements.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Specifies a page token to use. Set `pageToken` to a `nextPageToken`
     * returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * The path to the configuration for which you want to get a list of waiters.
     * The configuration must exist beforehand; the path must by in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The path to the configuration for which you want to get a list of waiters.
     * The configuration must exist beforehand; the path must by in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Specifies the number of results to return per page. If there are fewer
     * elements than the specified number, returns all elements.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Specifies the number of results to return per page. If there are fewer
     * elements than the specified number, returns all elements.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Specifies a page token to use. Set `pageToken` to a `nextPageToken`
     * returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Specifies a page token to use. Set `pageToken` to a `nextPageToken`
     * returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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

