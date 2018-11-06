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
namespace Google\Assistant\Embedded\V1alpha1;

/**
 * Service that implements Google Assistant API.
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
     * Initiates or continues a conversation with the embedded assistant service.
     * Each call performs one round-trip, sending an audio request to the service
     * and receiving the audio response. Uses bidirectional streaming to receive
     * results, such as the `END_OF_UTTERANCE` event, while sending audio.
     *
     * A conversation is one or more gRPC connections, each consisting of several
     * streamed requests and responses.
     * For example, the user says *Add to my shopping list* and the assistant
     * responds *What do you want to add?*. The sequence of streamed requests and
     * responses in the first gRPC message could be:
     *
     * *   ConverseRequest.config
     * *   ConverseRequest.audio_in
     * *   ConverseRequest.audio_in
     * *   ConverseRequest.audio_in
     * *   ConverseRequest.audio_in
     * *   ConverseResponse.event_type.END_OF_UTTERANCE
     * *   ConverseResponse.result.microphone_mode.DIALOG_FOLLOW_ON
     * *   ConverseResponse.audio_out
     * *   ConverseResponse.audio_out
     * *   ConverseResponse.audio_out
     *
     * The user then says *bagels* and the assistant responds
     * *OK, I've added bagels to your shopping list*. This is sent as another gRPC
     * connection call to the `Converse` method, again with streamed requests and
     * responses, such as:
     *
     * *   ConverseRequest.config
     * *   ConverseRequest.audio_in
     * *   ConverseRequest.audio_in
     * *   ConverseRequest.audio_in
     * *   ConverseResponse.event_type.END_OF_UTTERANCE
     * *   ConverseResponse.result.microphone_mode.CLOSE_MICROPHONE
     * *   ConverseResponse.audio_out
     * *   ConverseResponse.audio_out
     * *   ConverseResponse.audio_out
     * *   ConverseResponse.audio_out
     *
     * Although the precise order of responses is not guaranteed, sequential
     * ConverseResponse.audio_out messages will always contain sequential portions
     * of audio.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Converse($metadata = [], $options = []) {
        return $this->_bidiRequest('/google.assistant.embedded.v1alpha1.EmbeddedAssistant/Converse',
        ['\Google\Assistant\Embedded\V1alpha1\ConverseResponse','decode'],
        $metadata, $options);
    }

}
