<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The semantic result for the user's spoken query.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha1.ConverseResult</code>
 */
class ConverseResult extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* The recognized transcript of what the user said.
     *
     * Generated from protobuf field <code>string spoken_request_text = 1;</code>
     */
    private $spoken_request_text = '';
    /**
     * *Output-only* The text of the assistant's spoken response. This is only
     * returned for an IFTTT action.
     *
     * Generated from protobuf field <code>string spoken_response_text = 2;</code>
     */
    private $spoken_response_text = '';
    /**
     * *Output-only* State information for subsequent `ConverseRequest`. This
     * value should be saved in the client and returned in the
     * `conversation_state` with the next `ConverseRequest`. (The client does not
     * need to interpret or otherwise use this value.) There is no need to save
     * this information across device restarts.
     *
     * Generated from protobuf field <code>bytes conversation_state = 3;</code>
     */
    private $conversation_state = '';
    /**
     * *Output-only* Specifies the mode of the microphone after this `Converse`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha1.ConverseResult.MicrophoneMode microphone_mode = 4;</code>
     */
    private $microphone_mode = 0;
    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as "Increase the volume"
     * or "Set volume level 4" was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `ConverseRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 5;</code>
     */
    private $volume_percentage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $spoken_request_text
     *           *Output-only* The recognized transcript of what the user said.
     *     @type string $spoken_response_text
     *           *Output-only* The text of the assistant's spoken response. This is only
     *           returned for an IFTTT action.
     *     @type string $conversation_state
     *           *Output-only* State information for subsequent `ConverseRequest`. This
     *           value should be saved in the client and returned in the
     *           `conversation_state` with the next `ConverseRequest`. (The client does not
     *           need to interpret or otherwise use this value.) There is no need to save
     *           this information across device restarts.
     *     @type int $microphone_mode
     *           *Output-only* Specifies the mode of the microphone after this `Converse`
     *           RPC is processed.
     *     @type int $volume_percentage
     *           *Output-only* Updated volume level. The value will be 0 or omitted
     *           (indicating no change) unless a voice command such as "Increase the volume"
     *           or "Set volume level 4" was recognized, in which case the value will be
     *           between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     *           Typically, a client should use this volume level when playing the
     *           `audio_out` data, and retain this value as the current volume level and
     *           supply it in the `AudioOutConfig` of the next `ConverseRequest`. (Some
     *           clients may also implement other ways to allow the current volume level to
     *           be changed, for example, by providing a knob that the user can turn.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha1\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * *Output-only* The recognized transcript of what the user said.
     *
     * Generated from protobuf field <code>string spoken_request_text = 1;</code>
     * @return string
     */
    public function getSpokenRequestText()
    {
        return $this->spoken_request_text;
    }

    /**
     * *Output-only* The recognized transcript of what the user said.
     *
     * Generated from protobuf field <code>string spoken_request_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpokenRequestText($var)
    {
        GPBUtil::checkString($var, True);
        $this->spoken_request_text = $var;

        return $this;
    }

    /**
     * *Output-only* The text of the assistant's spoken response. This is only
     * returned for an IFTTT action.
     *
     * Generated from protobuf field <code>string spoken_response_text = 2;</code>
     * @return string
     */
    public function getSpokenResponseText()
    {
        return $this->spoken_response_text;
    }

    /**
     * *Output-only* The text of the assistant's spoken response. This is only
     * returned for an IFTTT action.
     *
     * Generated from protobuf field <code>string spoken_response_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpokenResponseText($var)
    {
        GPBUtil::checkString($var, True);
        $this->spoken_response_text = $var;

        return $this;
    }

    /**
     * *Output-only* State information for subsequent `ConverseRequest`. This
     * value should be saved in the client and returned in the
     * `conversation_state` with the next `ConverseRequest`. (The client does not
     * need to interpret or otherwise use this value.) There is no need to save
     * this information across device restarts.
     *
     * Generated from protobuf field <code>bytes conversation_state = 3;</code>
     * @return string
     */
    public function getConversationState()
    {
        return $this->conversation_state;
    }

    /**
     * *Output-only* State information for subsequent `ConverseRequest`. This
     * value should be saved in the client and returned in the
     * `conversation_state` with the next `ConverseRequest`. (The client does not
     * need to interpret or otherwise use this value.) There is no need to save
     * this information across device restarts.
     *
     * Generated from protobuf field <code>bytes conversation_state = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationState($var)
    {
        GPBUtil::checkString($var, False);
        $this->conversation_state = $var;

        return $this;
    }

    /**
     * *Output-only* Specifies the mode of the microphone after this `Converse`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha1.ConverseResult.MicrophoneMode microphone_mode = 4;</code>
     * @return int
     */
    public function getMicrophoneMode()
    {
        return $this->microphone_mode;
    }

    /**
     * *Output-only* Specifies the mode of the microphone after this `Converse`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha1.ConverseResult.MicrophoneMode microphone_mode = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMicrophoneMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Assistant\Embedded\V1alpha1\ConverseResult_MicrophoneMode::class);
        $this->microphone_mode = $var;

        return $this;
    }

    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as "Increase the volume"
     * or "Set volume level 4" was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `ConverseRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 5;</code>
     * @return int
     */
    public function getVolumePercentage()
    {
        return $this->volume_percentage;
    }

    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as "Increase the volume"
     * or "Set volume level 4" was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `ConverseRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setVolumePercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->volume_percentage = $var;

        return $this;
    }

}
