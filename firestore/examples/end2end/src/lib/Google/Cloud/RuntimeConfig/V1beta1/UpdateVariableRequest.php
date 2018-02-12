<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateVariable()` method.
 *
 * Generated from protobuf message <code>google.cloud.runtimeconfig.v1beta1.UpdateVariableRequest</code>
 */
class UpdateVariableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the variable to update, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The variable to update.
     *
     * Generated from protobuf field <code>.google.cloud.runtimeconfig.v1beta1.Variable variable = 2;</code>
     */
    private $variable = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct();
    }

    /**
     * The name of the variable to update, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the variable to update, in the format:
     * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]/variables/[VARIABLE_NAME]`
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
     * The variable to update.
     *
     * Generated from protobuf field <code>.google.cloud.runtimeconfig.v1beta1.Variable variable = 2;</code>
     * @return \Google\Cloud\RuntimeConfig\V1beta1\Variable
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * The variable to update.
     *
     * Generated from protobuf field <code>.google.cloud.runtimeconfig.v1beta1.Variable variable = 2;</code>
     * @param \Google\Cloud\RuntimeConfig\V1beta1\Variable $var
     * @return $this
     */
    public function setVariable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RuntimeConfig\V1beta1\Variable::class);
        $this->variable = $var;

        return $this;
    }

}

