<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateNodePoolRequest creates a node pool for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1beta1.CreateNodePoolRequest</code>
 */
class CreateNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field is deprecated, use parent instead.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field is deprecated, use parent instead.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster.
     * This field is deprecated, use parent instead.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NodePool node_pool = 4;</code>
     */
    private $node_pool = null;
    /**
     * The parent (project, location, cluster id) where the node pool will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     */
    private $parent = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field is deprecated, use parent instead.
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
     * This field is deprecated, use parent instead.
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
     * This field is deprecated, use parent instead.
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
     * This field is deprecated, use parent instead.
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
     * This field is deprecated, use parent instead.
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
     * This field is deprecated, use parent instead.
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
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NodePool node_pool = 4;</code>
     * @return \Google\Cloud\Container\V1beta1\NodePool
     */
    public function getNodePool()
    {
        return $this->node_pool;
    }

    /**
     * The node pool to create.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NodePool node_pool = 4;</code>
     * @param \Google\Cloud\Container\V1beta1\NodePool $var
     * @return $this
     */
    public function setNodePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1beta1\NodePool::class);
        $this->node_pool = $var;

        return $this;
    }

    /**
     * The parent (project, location, cluster id) where the node pool will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent (project, location, cluster id) where the node pool will be created.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string parent = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

