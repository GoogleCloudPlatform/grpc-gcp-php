<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how to process the `AssistRequest` messages.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.AssistConfig</code>
 */
class AssistConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * *Required* Specifies how to format the audio that will be returned.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOutConfig audio_out_config = 2;</code>
     */
    private $audio_out_config = null;
    /**
     * *Required* Represents the current dialog state.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateIn dialog_state_in = 3;</code>
     */
    private $dialog_state_in = null;
    /**
     * Device configuration that uniquely identifies a specific device.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceConfig device_config = 4;</code>
     */
    private $device_config = null;
    protected $type;

    public function __construct() {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct();
    }

    /**
     * Specifies how to process the subsequent incoming audio. Required if
     * [AssistRequest.audio_in][google.assistant.embedded.v1alpha2.AssistRequest.audio_in] bytes will be provided in subsequent requests.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioInConfig audio_in_config = 1;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\AudioInConfig
     */
    public function getAudioInConfig()
    {
        return $this->readOneof(1);
    }

    /**
     * Specifies how to process the subsequent incoming audio. Required if
     * [AssistRequest.audio_in][google.assistant.embedded.v1alpha2.AssistRequest.audio_in] bytes will be provided in subsequent requests.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioInConfig audio_in_config = 1;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\AudioInConfig $var
     * @return $this
     */
    public function setAudioInConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\AudioInConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The text input to be sent to the Assistant. This can be populated from a
     * text interface if audio input is not available.
     *
     * Generated from protobuf field <code>string text_query = 6;</code>
     * @return string
     */
    public function getTextQuery()
    {
        return $this->readOneof(6);
    }

    /**
     * The text input to be sent to the Assistant. This can be populated from a
     * text interface if audio input is not available.
     *
     * Generated from protobuf field <code>string text_query = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTextQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * *Required* Specifies how to format the audio that will be returned.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOutConfig audio_out_config = 2;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\AudioOutConfig
     */
    public function getAudioOutConfig()
    {
        return $this->audio_out_config;
    }

    /**
     * *Required* Specifies how to format the audio that will be returned.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOutConfig audio_out_config = 2;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\AudioOutConfig $var
     * @return $this
     */
    public function setAudioOutConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\AudioOutConfig::class);
        $this->audio_out_config = $var;

        return $this;
    }

    /**
     * *Required* Represents the current dialog state.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateIn dialog_state_in = 3;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\DialogStateIn
     */
    public function getDialogStateIn()
    {
        return $this->dialog_state_in;
    }

    /**
     * *Required* Represents the current dialog state.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateIn dialog_state_in = 3;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\DialogStateIn $var
     * @return $this
     */
    public function setDialogStateIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\DialogStateIn::class);
        $this->dialog_state_in = $var;

        return $this;
    }

    /**
     * Device configuration that uniquely identifies a specific device.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceConfig device_config = 4;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\DeviceConfig
     */
    public function getDeviceConfig()
    {
        return $this->device_config;
    }

    /**
     * Device configuration that uniquely identifies a specific device.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceConfig device_config = 4;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\DeviceConfig $var
     * @return $this
     */
    public function setDeviceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\DeviceConfig::class);
        $this->device_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

