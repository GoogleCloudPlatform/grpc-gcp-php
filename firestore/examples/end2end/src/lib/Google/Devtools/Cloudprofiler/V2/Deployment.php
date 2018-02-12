<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Devtools\Cloudprofiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deployment contains the deployment identification information.
 *
 * Generated from protobuf message <code>google.devtools.cloudprofiler.v2.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>string target = 2;</code>
     */
    private $target = '';
    /**
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be <= 512 bytes, the total
     * size of all label names and values must be <= 1024 bytes.
     * Label named "language" can be used to record the programming language of
     * the profiled deployment. The standard choices for the value include "java",
     * "go", "python", "ruby", "nodejs", "php", "dotnet".
     * For deployments running on Google Cloud Platform, "zone" or "region" label
     * should be present describing the deployment location. An example of a zone
     * is "us-central1-a", an example of a region is "us-central1" or
     * "us-central".
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct();
    }

    /**
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID is the ID of a cloud project.
     * Validation regex: `^[a-z][-a-z0-9:.]{4,61}[a-z0-9]$`.
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
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>string target = 2;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Target is the service name used to group related deployments:
     * * Service name for GAE Flex / Standard.
     * * Cluster and container name for GKE.
     * * User-specified string for direct GCE profiling (e.g. Java).
     * * Job name for Dataflow.
     * Validation regex: `^[a-z]([-a-z0-9_.]{0,253}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>string target = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be <= 512 bytes, the total
     * size of all label names and values must be <= 1024 bytes.
     * Label named "language" can be used to record the programming language of
     * the profiled deployment. The standard choices for the value include "java",
     * "go", "python", "ruby", "nodejs", "php", "dotnet".
     * For deployments running on Google Cloud Platform, "zone" or "region" label
     * should be present describing the deployment location. An example of a zone
     * is "us-central1-a", an example of a region is "us-central1" or
     * "us-central".
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels identify the deployment within the user universe and same target.
     * Validation regex for label names: `^[a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?$`.
     * Value for an individual label must be <= 512 bytes, the total
     * size of all label names and values must be <= 1024 bytes.
     * Label named "language" can be used to record the programming language of
     * the profiled deployment. The standard choices for the value include "java",
     * "go", "python", "ruby", "nodejs", "php", "dotnet".
     * For deployments running on Google Cloud Platform, "zone" or "region" label
     * should be present describing the deployment location. An example of a zone
     * is "us-central1-a", an example of a region is "us-central1" or
     * "us-central".
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

