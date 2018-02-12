<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

/**
 * Indicates the type of event.
 *
 * Protobuf enum <code>Google\Assistant\Embedded\V1alpha2\AssistResponse\EventType</code>
 */
class AssistResponse_EventType
{
    /**
     * No event specified.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * This event indicates that the server has detected the end of the user's
     * speech utterance and expects no additional speech. Therefore, the server
     * will not process additional audio (although it may subsequently return
     * additional results). The client should stop sending additional audio
     * data, half-close the gRPC connection, and wait for any additional results
     * until the server closes the gRPC connection.
     *
     * Generated from protobuf enum <code>END_OF_UTTERANCE = 1;</code>
     */
    const END_OF_UTTERANCE = 1;
}

