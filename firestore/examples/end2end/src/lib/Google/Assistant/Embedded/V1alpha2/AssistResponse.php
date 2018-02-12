<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message received by the client. A series of one or more
 * `AssistResponse` messages are streamed back to the client.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.AssistResponse</code>
 */
class AssistResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* Indicates the type of event.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AssistResponse.EventType event_type = 1;</code>
     */
    private $event_type = 0;
    /**
     * *Output-only* The audio containing the Assistant's response to the query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOut audio_out = 3;</code>
     */
    private $audio_out = null;
    /**
     * *Output-only* Contains the action triggered by the query with the
     * appropriate payloads and semantic parsing.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceAction device_action = 6;</code>
     */
    private $device_action = null;
    /**
     * *Output-only* This repeated list contains zero or more speech recognition
     * results that correspond to consecutive portions of the audio currently
     * being processed, starting with the portion corresponding to the earliest
     * audio (and most stable portion) to the portion corresponding to the most
     * recent audio. The strings can be concatenated to view the full
     * in-progress response. When the speech recognition completes, this list
     * will contain one item with `stability` of `1.0`.
     *
     * Generated from protobuf field <code>repeated .google.assistant.embedded.v1alpha2.SpeechRecognitionResult speech_results = 2;</code>
     */
    private $speech_results;
    /**
     * *Output-only* Contains output related to the user's query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut dialog_state_out = 5;</code>
     */
    private $dialog_state_out = null;

    public function __construct() {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct();
    }

    /**
     * *Output-only* Indicates the type of event.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AssistResponse.EventType event_type = 1;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * *Output-only* Indicates the type of event.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AssistResponse.EventType event_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Assistant\Embedded\V1alpha2\AssistResponse_EventType::class);
        $this->event_type = $var;

        return $this;
    }

    /**
     * *Output-only* The audio containing the Assistant's response to the query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOut audio_out = 3;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\AudioOut
     */
    public function getAudioOut()
    {
        return $this->audio_out;
    }

    /**
     * *Output-only* The audio containing the Assistant's response to the query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioOut audio_out = 3;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\AudioOut $var
     * @return $this
     */
    public function setAudioOut($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\AudioOut::class);
        $this->audio_out = $var;

        return $this;
    }

    /**
     * *Output-only* Contains the action triggered by the query with the
     * appropriate payloads and semantic parsing.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceAction device_action = 6;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\DeviceAction
     */
    public function getDeviceAction()
    {
        return $this->device_action;
    }

    /**
     * *Output-only* Contains the action triggered by the query with the
     * appropriate payloads and semantic parsing.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DeviceAction device_action = 6;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\DeviceAction $var
     * @return $this
     */
    public function setDeviceAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\DeviceAction::class);
        $this->device_action = $var;

        return $this;
    }

    /**
     * *Output-only* This repeated list contains zero or more speech recognition
     * results that correspond to consecutive portions of the audio currently
     * being processed, starting with the portion corresponding to the earliest
     * audio (and most stable portion) to the portion corresponding to the most
     * recent audio. The strings can be concatenated to view the full
     * in-progress response. When the speech recognition completes, this list
     * will contain one item with `stability` of `1.0`.
     *
     * Generated from protobuf field <code>repeated .google.assistant.embedded.v1alpha2.SpeechRecognitionResult speech_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechResults()
    {
        return $this->speech_results;
    }

    /**
     * *Output-only* This repeated list contains zero or more speech recognition
     * results that correspond to consecutive portions of the audio currently
     * being processed, starting with the portion corresponding to the earliest
     * audio (and most stable portion) to the portion corresponding to the most
     * recent audio. The strings can be concatenated to view the full
     * in-progress response. When the speech recognition completes, this list
     * will contain one item with `stability` of `1.0`.
     *
     * Generated from protobuf field <code>repeated .google.assistant.embedded.v1alpha2.SpeechRecognitionResult speech_results = 2;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\SpeechRecognitionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Assistant\Embedded\V1alpha2\SpeechRecognitionResult::class);
        $this->speech_results = $arr;

        return $this;
    }

    /**
     * *Output-only* Contains output related to the user's query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut dialog_state_out = 5;</code>
     * @return \Google\Assistant\Embedded\V1alpha2\DialogStateOut
     */
    public function getDialogStateOut()
    {
        return $this->dialog_state_out;
    }

    /**
     * *Output-only* Contains output related to the user's query.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut dialog_state_out = 5;</code>
     * @param \Google\Assistant\Embedded\V1alpha2\DialogStateOut $var
     * @return $this
     */
    public function setDialogStateOut($var)
    {
        GPBUtil::checkMessage($var, \Google\Assistant\Embedded\V1alpha2\DialogStateOut::class);
        $this->dialog_state_out = $var;

        return $this;
    }

}

