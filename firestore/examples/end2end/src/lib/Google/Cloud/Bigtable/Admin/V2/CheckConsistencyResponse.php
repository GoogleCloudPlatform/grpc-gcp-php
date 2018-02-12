<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is a private alpha release of Cloud Bigtable replication. This feature
 * is not currently available to most Cloud Bigtable customers. This feature
 * might be changed in backward-incompatible ways and is not recommended for
 * production use. It is not subject to any SLA or deprecation policy.
 * Response message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency][google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CheckConsistencyResponse</code>
 */
class CheckConsistencyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     */
    private $consistent = false;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     * @return bool
     */
    public function getConsistent()
    {
        return $this->consistent;
    }

    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setConsistent($var)
    {
        GPBUtil::checkBool($var);
        $this->consistent = $var;

        return $this;
    }

}

