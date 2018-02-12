<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RunBuildTriggerRequest specifies a build trigger to run and the source to
 * use.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.RunBuildTriggerRequest</code>
 */
class RunBuildTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * ID of the trigger.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     */
    private $trigger_id = '';
    /**
     * Source to build against this trigger.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource source = 3;</code>
     */
    private $source = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the project.
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
     * ID of the trigger.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     * @return string
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * ID of the trigger.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger_id = $var;

        return $this;
    }

    /**
     * Source to build against this trigger.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource source = 3;</code>
     * @return \Google\Devtools\Cloudbuild\V1\RepoSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Source to build against this trigger.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource source = 3;</code>
     * @param \Google\Devtools\Cloudbuild\V1\RepoSource $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\RepoSource::class);
        $this->source = $var;

        return $this;
    }

}

