<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Assistant\Embedded\V1alpha2;

/**
 * Service that implements the Google Assistant API.
 */
class EmbeddedAssistantClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Initiates or continues a conversation with the embedded Assistant Service.
     * Each call performs one round-trip, sending an audio request to the service
     * and receiving the audio response. Uses bidirectional streaming to receive
     * results, such as the `END_OF_UTTERANCE` event, while sending audio.
     *
     * A conversation is one or more gRPC connections, each consisting of several
     * streamed requests and responses.
     * For example, the user says *Add to my shopping list* and the Assistant
     * responds *What do you want to add?*. The sequence of streamed requests and
     * responses in the first gRPC message could be:
     *
     * *   AssistRequest.config
     * *   AssistRequest.audio_in
     * *   AssistRequest.audio_in
     * *   AssistRequest.audio_in
     * *   AssistRequest.audio_in
     * *   AssistResponse.event_type.END_OF_UTTERANCE
     * *   AssistResponse.speech_results.transcript "add to my shopping list"
     * *   AssistResponse.dialog_state_out.microphone_mode.DIALOG_FOLLOW_ON
     * *   AssistResponse.audio_out
     * *   AssistResponse.audio_out
     * *   AssistResponse.audio_out
     *
     *
     * The user then says *bagels* and the Assistant responds
     * *OK, I've added bagels to your shopping list*. This is sent as another gRPC
     * connection call to the `Assist` method, again with streamed requests and
     * responses, such as:
     *
     * *   AssistRequest.config
     * *   AssistRequest.audio_in
     * *   AssistRequest.audio_in
     * *   AssistRequest.audio_in
     * *   AssistResponse.event_type.END_OF_UTTERANCE
     * *   AssistResponse.dialog_state_out.microphone_mode.CLOSE_MICROPHONE
     * *   AssistResponse.audio_out
     * *   AssistResponse.audio_out
     * *   AssistResponse.audio_out
     * *   AssistResponse.audio_out
     *
     * Although the precise order of responses is not guaranteed, sequential
     * `AssistResponse.audio_out` messages will always contain sequential portions
     * of audio.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Assist($metadata = [], $options = []) {
        return $this->_bidiRequest('/google.assistant.embedded.v1alpha2.EmbeddedAssistant/Assist',
        ['\Google\Assistant\Embedded\V1alpha2\AssistResponse','decode'],
        $metadata, $options);
    }

}
