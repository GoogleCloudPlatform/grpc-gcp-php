<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1alpha1/cluster_service.proto

namespace Google\Cloud\Container\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StartIPRotationRequest creates a new IP for the cluster and then performs
 * a node upgrade on each node pool to point to the new IP.
 *
 * Generated from protobuf message <code>google.container.v1alpha1.StartIPRotationRequest</code>
 */
class StartIPRotationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
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
     * The name of the cluster.
     * This field is deprecated, use name instead.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The name (project, location, cluster id) of the cluster to start IP rotation.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1Alpha1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
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
     * number](https://developers.google.com/console/help/new/#projectnumber).
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
     * The name of the cluster.
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
     * The name of the cluster.
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
     * The name (project, location, cluster id) of the cluster to start IP rotation.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster id) of the cluster to start IP rotation.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
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

