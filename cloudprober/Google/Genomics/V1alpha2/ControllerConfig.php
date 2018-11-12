<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stores the information that the controller will fetch from the
 * server in order to run. Should only be used by VMs created by the
 * Pipelines Service and not by end users.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.ControllerConfig</code>
 */
class ControllerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string image = 1;</code>
     */
    private $image = '';
    /**
     * Generated from protobuf field <code>string cmd = 2;</code>
     */
    private $cmd = '';
    /**
     * Generated from protobuf field <code>string gcs_log_path = 3;</code>
     */
    private $gcs_log_path = '';
    /**
     * Generated from protobuf field <code>string machine_type = 4;</code>
     */
    private $machine_type = '';
    /**
     * Generated from protobuf field <code>map<string, string> vars = 5;</code>
     */
    private $vars;
    /**
     * Generated from protobuf field <code>map<string, string> disks = 6;</code>
     */
    private $disks;
    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sources = 7;</code>
     */
    private $gcs_sources;
    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sinks = 8;</code>
     */
    private $gcs_sinks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image
     *     @type string $cmd
     *     @type string $gcs_log_path
     *     @type string $machine_type
     *     @type array|\Google\Protobuf\Internal\MapField $vars
     *     @type array|\Google\Protobuf\Internal\MapField $disks
     *     @type array|\Google\Protobuf\Internal\MapField $gcs_sources
     *     @type array|\Google\Protobuf\Internal\MapField $gcs_sinks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string image = 1;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>string image = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cmd = 2;</code>
     * @return string
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Generated from protobuf field <code>string cmd = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCmd($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gcs_log_path = 3;</code>
     * @return string
     */
    public function getGcsLogPath()
    {
        return $this->gcs_log_path;
    }

    /**
     * Generated from protobuf field <code>string gcs_log_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsLogPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_log_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string machine_type = 4;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Generated from protobuf field <code>string machine_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> vars = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * Generated from protobuf field <code>map<string, string> vars = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVars($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->vars = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> disks = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * Generated from protobuf field <code>map<string, string> disks = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->disks = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sources = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getGcsSources()
    {
        return $this->gcs_sources;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sources = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setGcsSources($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1alpha2\ControllerConfig\RepeatedString::class);
        $this->gcs_sources = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sinks = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getGcsSinks()
    {
        return $this->gcs_sinks;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.genomics.v1alpha2.ControllerConfig.RepeatedString> gcs_sinks = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setGcsSinks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1alpha2\ControllerConfig\RepeatedString::class);
        $this->gcs_sinks = $arr;

        return $this;
    }

}
