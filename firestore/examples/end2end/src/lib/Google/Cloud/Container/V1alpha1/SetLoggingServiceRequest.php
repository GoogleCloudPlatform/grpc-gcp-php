<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1alpha1/cluster_service.proto

namespace Google\Cloud\Container\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetLoggingServiceRequest sets the logging service of a cluster.
 *
 * Generated from protobuf message <code>google.container.v1alpha1.SetLoggingServiceRequest</code>
 */
class SetLoggingServiceRequest extends \Google\Protobuf\Internal\Message
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
     * The logging service the cluster should use to write metrics.
     * Currently available options:
     * * "logging.googleapis.com" - the Google Cloud Logging service
     * * "none" - no metrics will be exported from the cluster
     *
     * Generated from protobuf field <code>string logging_service = 4;</code>
     */
    private $logging_service = '';
    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1Alpha1\ClusterService::initOnce();
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
     * The logging service the cluster should use to write metrics.
     * Currently available options:
     * * "logging.googleapis.com" - the Google Cloud Logging service
     * * "none" - no metrics will be exported from the cluster
     *
     * Generated from protobuf field <code>string logging_service = 4;</code>
     * @return string
     */
    public function getLoggingService()
    {
        return $this->logging_service;
    }

    /**
     * The logging service the cluster should use to write metrics.
     * Currently available options:
     * * "logging.googleapis.com" - the Google Cloud Logging service
     * * "none" - no metrics will be exported from the cluster
     *
     * Generated from protobuf field <code>string logging_service = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLoggingService($var)
    {
        GPBUtil::checkString($var, True);
        $this->logging_service = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster) of the cluster to set logging.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 5;</code>
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

