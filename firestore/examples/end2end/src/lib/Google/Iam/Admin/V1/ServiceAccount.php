<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A service account in the Identity and Access Management API.
 * To create a service account, specify the `project_id` and the `account_id`
 * for the account.  The `account_id` is unique within the project, and is used
 * to generate the service account email address and a stable
 * `unique_id`.
 * If the account already exists, the account's resource name is returned
 * in util::Status's ResourceInfo.resource_name in the format of
 * projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}. The caller can
 * use the name in other methods to access the account.
 * All other methods can identify the service account using the format
 * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
 * Using `-` as a wildcard for the project will infer the project from
 * the account. The `account` value can be the `email` address or the
 * `unique_id` of the service account.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.ServiceAccount</code>
 */
class ServiceAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * &#64;OutputOnly The id of the project that owns the service account.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     */
    private $unique_id = '';
    /**
     * &#64;OutputOnly The email address of the service account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     */
    private $email = '';
    /**
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    private $display_name = '';
    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 7;</code>
     */
    private $etag = '';
    /**
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 9;</code>
     */
    private $oauth2_client_id = '';

    public function __construct() {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct();
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
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
     * Requests using `-` as a wildcard for the project will infer the project
     * from the `account` and the `account` value can be the `email` address or
     * the `unique_id` of the service account.
     * In responses the resource name will always be in the format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
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

    /**
     * &#64;OutputOnly The id of the project that owns the service account.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * &#64;OutputOnly The id of the project that owns the service account.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
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
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * &#64;OutputOnly The email address of the service account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * &#64;OutputOnly The email address of the service account.
     *
     * Generated from protobuf field <code>string email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. A user-specified description of the service account.  Must be
     * fewer than 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 7;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->etag = $var;

        return $this;
    }

    /**
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 9;</code>
     * @return string
     */
    public function getOauth2ClientId()
    {
        return $this->oauth2_client_id;
    }

    /**
     * &#64;OutputOnly. The OAuth2 client id for the service account.
     * This is used in conjunction with the OAuth2 clientconfig API to make
     * three legged OAuth2 (3LO) flows to access the data of Google users.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_id = $var;

        return $this;
    }

}

