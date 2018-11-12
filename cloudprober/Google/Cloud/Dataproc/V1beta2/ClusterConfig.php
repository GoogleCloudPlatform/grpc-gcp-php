<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The cluster config.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ClusterConfig</code>
 */
class ClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A Cloud Storage staging bucket used for sharing generated
     * SSH keys and config. If you do not specify a staging bucket, Cloud
     * Dataproc will determine an appropriate Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the Google
     * Compute Engine zone where your cluster is deployed, and then it will create
     * and manage this project-level, per-location bucket for you.
     *
     * Generated from protobuf field <code>string config_bucket = 1;</code>
     */
    private $config_bucket = '';
    /**
     * Required. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8;</code>
     */
    private $gce_cluster_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9;</code>
     */
    private $master_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10;</code>
     */
    private $worker_config = null;
    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12;</code>
     */
    private $secondary_worker_config = null;
    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13;</code>
     */
    private $software_config = null;
    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14;</code>
     */
    private $lifecycle_config = null;
    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11;</code>
     */
    private $initialization_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $config_bucket
     *           Optional. A Cloud Storage staging bucket used for sharing generated
     *           SSH keys and config. If you do not specify a staging bucket, Cloud
     *           Dataproc will determine an appropriate Cloud Storage location (US,
     *           ASIA, or EU) for your cluster's staging bucket according to the Google
     *           Compute Engine zone where your cluster is deployed, and then it will create
     *           and manage this project-level, per-location bucket for you.
     *     @type \Google\Cloud\Dataproc\V1beta2\GceClusterConfig $gce_cluster_config
     *           Required. The shared Compute Engine config settings for
     *           all instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $master_config
     *           Optional. The Compute Engine config settings for
     *           the master instance in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $worker_config
     *           Optional. The Compute Engine config settings for
     *           worker instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $secondary_worker_config
     *           Optional. The Compute Engine config settings for
     *           additional worker instances in a cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\SoftwareConfig $software_config
     *           Optional. The config settings for software inside the cluster.
     *     @type \Google\Cloud\Dataproc\V1beta2\LifecycleConfig $lifecycle_config
     *           Optional. The config setting for auto delete cluster schedule.
     *     @type \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction[]|\Google\Protobuf\Internal\RepeatedField $initialization_actions
     *           Optional. Commands to execute on each node after config is
     *           completed. By default, executables are run on master and all worker nodes.
     *           You can test a node's <code>role</code> metadata to run an executable on
     *           a master or worker node, as shown below using `curl` (you can also use `wget`):
     *               ROLE=$(curl -H Metadata-Flavor:Google http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *               if [[ "${ROLE}" == 'Master' ]]; then
     *                 ... master specific actions ...
     *               else
     *                 ... worker specific actions ...
     *               fi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A Cloud Storage staging bucket used for sharing generated
     * SSH keys and config. If you do not specify a staging bucket, Cloud
     * Dataproc will determine an appropriate Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the Google
     * Compute Engine zone where your cluster is deployed, and then it will create
     * and manage this project-level, per-location bucket for you.
     *
     * Generated from protobuf field <code>string config_bucket = 1;</code>
     * @return string
     */
    public function getConfigBucket()
    {
        return $this->config_bucket;
    }

    /**
     * Optional. A Cloud Storage staging bucket used for sharing generated
     * SSH keys and config. If you do not specify a staging bucket, Cloud
     * Dataproc will determine an appropriate Cloud Storage location (US,
     * ASIA, or EU) for your cluster's staging bucket according to the Google
     * Compute Engine zone where your cluster is deployed, and then it will create
     * and manage this project-level, per-location bucket for you.
     *
     * Generated from protobuf field <code>string config_bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConfigBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->config_bucket = $var;

        return $this;
    }

    /**
     * Required. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\GceClusterConfig
     */
    public function getGceClusterConfig()
    {
        return $this->gce_cluster_config;
    }

    /**
     * Required. The shared Compute Engine config settings for
     * all instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.GceClusterConfig gce_cluster_config = 8;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\GceClusterConfig $var
     * @return $this
     */
    public function setGceClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\GceClusterConfig::class);
        $this->gce_cluster_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getMasterConfig()
    {
        return $this->master_config;
    }

    /**
     * Optional. The Compute Engine config settings for
     * the master instance in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig master_config = 9;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setMasterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->master_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getWorkerConfig()
    {
        return $this->worker_config;
    }

    /**
     * Optional. The Compute Engine config settings for
     * worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig worker_config = 10;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setWorkerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->worker_config = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig
     */
    public function getSecondaryWorkerConfig()
    {
        return $this->secondary_worker_config;
    }

    /**
     * Optional. The Compute Engine config settings for
     * additional worker instances in a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.InstanceGroupConfig secondary_worker_config = 12;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig $var
     * @return $this
     */
    public function setSecondaryWorkerConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\InstanceGroupConfig::class);
        $this->secondary_worker_config = $var;

        return $this;
    }

    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\SoftwareConfig
     */
    public function getSoftwareConfig()
    {
        return $this->software_config;
    }

    /**
     * Optional. The config settings for software inside the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.SoftwareConfig software_config = 13;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\SoftwareConfig $var
     * @return $this
     */
    public function setSoftwareConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\SoftwareConfig::class);
        $this->software_config = $var;

        return $this;
    }

    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14;</code>
     * @return \Google\Cloud\Dataproc\V1beta2\LifecycleConfig
     */
    public function getLifecycleConfig()
    {
        return $this->lifecycle_config;
    }

    /**
     * Optional. The config setting for auto delete cluster schedule.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.LifecycleConfig lifecycle_config = 14;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\LifecycleConfig $var
     * @return $this
     */
    public function setLifecycleConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\LifecycleConfig::class);
        $this->lifecycle_config = $var;

        return $this;
    }

    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitializationActions()
    {
        return $this->initialization_actions;
    }

    /**
     * Optional. Commands to execute on each node after config is
     * completed. By default, executables are run on master and all worker nodes.
     * You can test a node's <code>role</code> metadata to run an executable on
     * a master or worker node, as shown below using `curl` (you can also use `wget`):
     *     ROLE=$(curl -H Metadata-Flavor:Google http://metadata/computeMetadata/v1beta2/instance/attributes/dataproc-role)
     *     if [[ "${ROLE}" == 'Master' ]]; then
     *       ... master specific actions ...
     *     else
     *       ... worker specific actions ...
     *     fi
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1beta2.NodeInitializationAction initialization_actions = 11;</code>
     * @param \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitializationActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1beta2\NodeInitializationAction::class);
        $this->initialization_actions = $arr;

        return $this;
    }

}
