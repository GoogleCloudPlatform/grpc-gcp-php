<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Grpc;

/**
 * Class AbstractCall.
 * @package Grpc
 */
abstract class AbstractCall
{
    /**
     * @var Call
     */
    //protected $call;
    protected $deserialize;
    protected $metadata;
    protected $trailing_metadata;
    protected $channel;
    protected $ch;

    /**
     * Create a new Call wrapper object.
     *
     * @param resource  $channel     The channel to communicate on
     * @param string   $method      The method to call on the
     *                              remote server
     * @param callback $deserialize A callback function to deserialize
     *                              the response
     * @param array    $options     Call options (optional)
     */
    public function __construct($channel,
                                $method,
                                $deserialize,
                                array $options = [])
    {
        // TODO: check Timeout,etc from $options
        // TODO: call credentials?
        $this->ch = curl_init();
        $headers[] = 'custom-header-1: value1';
        $headers[] = 'Content-Type: application/grpc-web-text';
        $headers[] = 'Accept: application/grpc-web-text';

        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_URL, $method);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);

        $this->channel = $channel;
        $this->deserialize = $deserialize;
        $this->metadata = null;
        $this->trailing_metadata = null;
    }

    /**
     * @param mixed $argument The data to decode
     * @return string Base64 decoded massage
     */
    public function _base64encode($argument) {
        $serialized_data = $argument->serializeToString();
        $len = strlen($serialized_data);
        $bytesArray = [0, 0, 0, 0, 0];
        for ($i = 4; $i >= 1; $i--) {
            $bytesArray[$i] = ($len % 256);
            $len = $len >> 8;
        }
        $serialized_data_byte = unpack('C*', $serialized_data);
        $argument_data_byte = array_merge($bytesArray, $serialized_data_byte);
        $argument_data_string = implode(array_map("chr", $argument_data_byte));
        return base64_encode($argument_data_string);
    }

    /**
     * @return mixed The metadata sent by the server
     */
    public function getMetadata()
    {
    }

    /**
     * @return mixed The trailing metadata sent by the server
     */
    public function getTrailingMetadata()
    {
    }

    /**
     * @return string The URI of the endpoint
     */
    public function getPeer()
    {
    }

    /**
     * Cancels the call.
     */
    public function cancel()
    {
    }

    /**
     * Serialize a message to the protobuf binary format.
     *
     * @param mixed $data The Protobuf message
     *
     * @return string The protobuf binary format
     */
    protected function _serializeMessage($data)
    {
        // Proto3 implementation
        if (method_exists($data, 'encode')) {
            return $data->encode();
        } elseif (method_exists($data, 'serializeToString')) {
            return $data->serializeToString();
        }

        // Protobuf-PHP implementation
        return $data->serialize();
    }

    /**
     * Deserialize a response value to an object.
     *
     * @param string $value The binary value to deserialize
     *
     * @return mixed The deserialized value
     */
    protected function _deserializeResponse($value)
    {
        if ($value === null) {
            return;
        }

        // Proto3 implementation
        if (is_array($this->deserialize)) {
            list($className, $deserializeFunc) = $this->deserialize;
            $obj = new $className();
            if (method_exists($obj, $deserializeFunc)) {
                $obj->$deserializeFunc($value);
            } else {
                $obj->mergeFromString($value);
            }

            return $obj;
        }

        // Protobuf-PHP implementation
        return call_user_func($this->deserialize, $value);
    }

    /**
     * Set the CallCredentials for the underlying Call.
     *
     * @param CallCredentials $call_credentials The CallCredentials object
     */
    public function setCallCredentials($call_credentials)
    {
    }
}
