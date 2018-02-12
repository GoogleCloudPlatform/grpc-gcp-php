<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/project_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Returns service account information associated with a project.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.GetConfigResponse</code>
 */
class GetConfigResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The service account Cloud ML uses to access resources in the project.
     *
     * Generated from protobuf field <code>string service_account = 1;</code>
     */
    private $service_account = '';
    /**
     * The project number for `service_account`.
     *
     * Generated from protobuf field <code>int64 service_account_project = 2;</code>
     */
    private $service_account_project = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\ProjectService::initOnce();
        parent::__construct();
    }

    /**
     * The service account Cloud ML uses to access resources in the project.
     *
     * Generated from protobuf field <code>string service_account = 1;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account Cloud ML uses to access resources in the project.
     *
     * Generated from protobuf field <code>string service_account = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * The project number for `service_account`.
     *
     * Generated from protobuf field <code>int64 service_account_project = 2;</code>
     * @return int|string
     */
    public function getServiceAccountProject()
    {
        return $this->service_account_project;
    }

    /**
     * The project number for `service_account`.
     *
     * Generated from protobuf field <code>int64 service_account_project = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServiceAccountProject($var)
    {
        GPBUtil::checkInt64($var);
        $this->service_account_project = $var;

        return $this;
    }

}

