<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client to the
 * `StreamingDetectIntent` method.
 * Multiple request messages should be sent in order:
 * 1.  The first message must contain `session`, `query_input` plus optionally
 *     `query_params` and/or `single_utterance`. The message must not contain `input_audio`.
 * 2.  If `query_input` was set to a streaming input audio config,
 *     all subsequent messages must contain only `input_audio`.
 *     Otherwise, finish the request stream.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.StreamingDetectIntentRequest</code>
 */
class StreamingDetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`.
     * It’s up to the API caller to choose an appropriate <Session ID>. It can be
     * a random number or some type of user identifier (preferably hashed).
     * The length of the session ID must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     */
    private $query_params = null;
    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     */
    private $query_input = null;
    /**
     * Optional. If `true`, the recognizer will detect a single spoken utterance
     * in input audio. When it detects that the user has paused or stopped
     * speaking, it will cease recognition. This setting is ignored when
     * `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4;</code>
     */
    private $single_utterance = false;
    /**
     * Optional. The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     */
    private $input_audio = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Session::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`.
     * It’s up to the API caller to choose an appropriate <Session ID>. It can be
     * a random number or some type of user identifier (preferably hashed).
     * The length of the session ID must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`.
     * It’s up to the API caller to choose an appropriate <Session ID>. It can be
     * a random number or some type of user identifier (preferably hashed).
     * The length of the session ID must not exceed 36 characters.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\QueryParameters
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    /**
     * Optional. The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\QueryInput
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.QueryInput query_input = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Optional. If `true`, the recognizer will detect a single spoken utterance
     * in input audio. When it detects that the user has paused or stopped
     * speaking, it will cease recognition. This setting is ignored when
     * `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4;</code>
     * @return bool
     */
    public function getSingleUtterance()
    {
        return $this->single_utterance;
    }

    /**
     * Optional. If `true`, the recognizer will detect a single spoken utterance
     * in input audio. When it detects that the user has paused or stopped
     * speaking, it will cease recognition. This setting is ignored when
     * `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleUtterance($var)
    {
        GPBUtil::checkBool($var);
        $this->single_utterance = $var;

        return $this;
    }

    /**
     * Optional. The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     * @return string
     */
    public function getInputAudio()
    {
        return $this->input_audio;
    }

    /**
     * Optional. The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->input_audio = $var;

        return $this;
    }

}

