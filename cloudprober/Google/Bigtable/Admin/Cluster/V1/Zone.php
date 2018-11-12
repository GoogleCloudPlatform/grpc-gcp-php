<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/cluster/v1/bigtable_cluster_data.proto

namespace Google\Bigtable\Admin\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A physical location in which a particular project can allocate Cloud BigTable
 * resources.
 *
 * Generated from protobuf message <code>google.bigtable.admin.cluster.v1.Zone</code>
 */
class Zone extends \Google\Protobuf\Internal\Message
{
    /**
     * A permanent unique identifier for the zone.
     * Values are of the form projects/<project>/zones/[a-z][-a-z0-9]*
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of this zone as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The current state of this zone.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.cluster.v1.Zone.Status status = 3;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A permanent unique identifier for the zone.
     *           Values are of the form projects/<project>/zones/[a-z][-a-z0-9]*
     *     @type string $display_name
     *           The name of this zone as it appears in UIs.
     *     @type int $status
     *           The current state of this zone.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\Cluster\V1\BigtableClusterData::initOnce();
        parent::__construct($data);
    }

    /**
     * A permanent unique identifier for the zone.
     * Values are of the form projects/<project>/zones/[a-z][-a-z0-9]*
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A permanent unique identifier for the zone.
     * Values are of the form projects/<project>/zones/[a-z][-a-z0-9]*
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
     * The name of this zone as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The name of this zone as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * The current state of this zone.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.cluster.v1.Zone.Status status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The current state of this zone.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.cluster.v1.Zone.Status status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Bigtable\Admin\Cluster\V1\Zone_Status::class);
        $this->status = $var;

        return $this;
    }

}
