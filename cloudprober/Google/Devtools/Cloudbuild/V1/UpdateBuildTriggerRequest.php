<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update an existing `BuildTrigger`.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.UpdateBuildTriggerRequest</code>
 */
class UpdateBuildTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the project that owns the trigger.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * ID of the `BuildTrigger` to update.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     */
    private $trigger_id = '';
    /**
     * `BuildTrigger` to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildTrigger trigger = 3;</code>
     */
    private $trigger = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           ID of the project that owns the trigger.
     *     @type string $trigger_id
     *           ID of the `BuildTrigger` to update.
     *     @type \Google\Devtools\Cloudbuild\V1\BuildTrigger $trigger
     *           `BuildTrigger` to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the project that owns the trigger.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the project that owns the trigger.
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
     * ID of the `BuildTrigger` to update.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     * @return string
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * ID of the `BuildTrigger` to update.
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
     * `BuildTrigger` to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildTrigger trigger = 3;</code>
     * @return \Google\Devtools\Cloudbuild\V1\BuildTrigger
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * `BuildTrigger` to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildTrigger trigger = 3;</code>
     * @param \Google\Devtools\Cloudbuild\V1\BuildTrigger $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\BuildTrigger::class);
        $this->trigger = $var;

        return $this;
    }

}
