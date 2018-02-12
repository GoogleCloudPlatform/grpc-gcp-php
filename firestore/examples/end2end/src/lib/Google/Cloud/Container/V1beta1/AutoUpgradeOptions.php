<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AutoUpgradeOptions defines the set of options for the user to control how
 * the Auto Upgrades will proceed.
 *
 * Generated from protobuf message <code>google.container.v1beta1.AutoUpgradeOptions</code>
 */
class AutoUpgradeOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the approximate start time for the upgrades, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string auto_upgrade_start_time = 1;</code>
     */
    private $auto_upgrade_start_time = '';
    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the description of the upgrade.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the approximate start time for the upgrades, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string auto_upgrade_start_time = 1;</code>
     * @return string
     */
    public function getAutoUpgradeStartTime()
    {
        return $this->auto_upgrade_start_time;
    }

    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the approximate start time for the upgrades, in
     * [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string auto_upgrade_start_time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoUpgradeStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->auto_upgrade_start_time = $var;

        return $this;
    }

    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the description of the upgrade.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * [Output only] This field is set when upgrades are about to commence
     * with the description of the upgrade.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

