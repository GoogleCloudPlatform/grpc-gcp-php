<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetMasterAuthRequest updates the admin password of a cluster.
 *
 * Generated from protobuf message <code>google.container.v1beta1.SetMasterAuthRequest</code>
 */
class SetMasterAuthRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster to upgrade.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The exact form of action to be taken on the master auth.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.SetMasterAuthRequest.Action action = 4;</code>
     */
    private $action = 0;
    /**
     * A description of the update.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.MasterAuth update = 5;</code>
     */
    private $update = null;
    /**
     * The name (project, location, cluster) of the cluster to set auth.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
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
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The name of the cluster to upgrade.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The name of the cluster to upgrade.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The exact form of action to be taken on the master auth.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.SetMasterAuthRequest.Action action = 4;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The exact form of action to be taken on the master auth.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.SetMasterAuthRequest.Action action = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1beta1\SetMasterAuthRequest_Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * A description of the update.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.MasterAuth update = 5;</code>
     * @return \Google\Cloud\Container\V1beta1\MasterAuth
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * A description of the update.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.MasterAuth update = 5;</code>
     * @param \Google\Cloud\Container\V1beta1\MasterAuth $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1beta1\MasterAuth::class);
        $this->update = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster) of the cluster to set auth.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster) of the cluster to set auth.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
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

