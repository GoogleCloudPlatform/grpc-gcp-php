<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for `ListSupportAccount`.
 *
 * Generated from protobuf message <code>google.cloud.support.v1alpha1.ListSupportAccountsResponse</code>
 */
class ListSupportAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of support accounts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     */
    private $accounts;
    /**
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct();
    }

    /**
     * A list of support accounts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * A list of support accounts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.SupportAccount accounts = 1;</code>
     * @param \Google\Cloud\Support\Common\SupportAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Support\Common\SupportAccount::class);
        $this->accounts = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results. This should be passed on in
     * `page_token` field of `ListSupportAccountRequest` for next request. If
     * unspecified, there are no more results to retrieve.
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

