<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The service account get request.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.GetServiceAccountRequest</code>
 */
class GetServiceAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

