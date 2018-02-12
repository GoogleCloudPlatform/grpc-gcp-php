<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a machine learning solution.
 * A model can have multiple versions, each of which is a deployed, trained
 * model ready to receive prediction requests. The model itself is just a
 * container.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. The description specified for the model when it was created.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1/projects.models.versions/setDefault).
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.Version default_version = 3;</code>
     */
    private $default_version = null;
    /**
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     *
     * Generated from protobuf field <code>repeated string regions = 4;</code>
     */
    private $regions;
    /**
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     *
     * Generated from protobuf field <code>bool online_prediction_logging = 5;</code>
     */
    private $online_prediction_logging = false;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name specified for the model when it was created.
     * The model name must be unique within the project it is created in.
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
     * Optional. The description specified for the model when it was created.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description specified for the model when it was created.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1/projects.models.versions/setDefault).
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.Version default_version = 3;</code>
     * @return \Google\Cloud\Ml\V1\Version
     */
    public function getDefaultVersion()
    {
        return $this->default_version;
    }

    /**
     * Output only. The default version of the model. This version will be used to
     * handle prediction requests that do not specify a version.
     * You can change the default version by calling
     * [projects.methods.versions.setDefault](/ml/reference/rest/v1/projects.models.versions/setDefault).
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.Version default_version = 3;</code>
     * @param \Google\Cloud\Ml\V1\Version $var
     * @return $this
     */
    public function setDefaultVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ml\V1\Version::class);
        $this->default_version = $var;

        return $this;
    }

    /**
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     *
     * Generated from protobuf field <code>repeated string regions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Optional. The list of regions where the model is going to be deployed.
     * Currently only one region per model is supported.
     * Defaults to 'us-central1' if nothing is set.
     *
     * Generated from protobuf field <code>repeated string regions = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->regions = $arr;

        return $this;
    }

    /**
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     *
     * Generated from protobuf field <code>bool online_prediction_logging = 5;</code>
     * @return bool
     */
    public function getOnlinePredictionLogging()
    {
        return $this->online_prediction_logging;
    }

    /**
     * Optional. If true, enables StackDriver Logging for online prediction.
     * Default is false.
     *
     * Generated from protobuf field <code>bool online_prediction_logging = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnlinePredictionLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->online_prediction_logging = $var;

        return $this;
    }

}

