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
    protected $multi_handler;
    protected $curl_handler;
    // TODO define the enum below to constant
    // send_status is enum of {"call_init", "send_request_done", "receive_response_begin", "call_done"}
    protected $call_status = "call_init";

    /**
     * Create a new Call wrapper object.
     *
     * @param Channel  $channel     The channel to communicate on
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
        // TODO: add ssl
        // TODO: add call credentials
        // TODO: add custom header
        $this->curl_handler = curl_init();
        $headers[] = "Content-Type: application/grpc";
        $headers[] = "TE: trailers";
        $options = array(
            CURLOPT_URL            => $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_POST            => true,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_HEADERFUNCTION => array($this, 'header_callback'),
            CURLOPT_VERBOSE => 1,
        );
        curl_setopt_array($this->curl_handler, $options);
        $this->channel = $channel;
        $this->multi_handler = $channel->getMh();
        $this->deserialize = $deserialize;
        $this->metadata = null;
        $this->trailing_metadata = null;
        $this->channel->register_ch($this->curl_handler);
    }

    public function header_callback($ch, $header_line)
    {
        $first_colume_idx = strpos($header_line, ':');
        if ($first_colume_idx === false) {
            $key = $header_line;
            $value = "";
        } else {
            $key = substr($header_line, 0, $first_colume_idx);
            $value = substr($header_line, $first_colume_idx + 1);
        }
        // Header received after receiving data frame is counted as trailer
        if($this->call_status == "receive_response_begin"){
            // TODO create a struct to save trailer
            // TODO: update trailer process after new libcurl is released
            // Currently, libcurl has bug which all trailers after 2nd are read incorrectly.
            // https://github.com/curl/curl/commit/fa3dbb9a147488a2943bda809c66fc497efe06cb
            // Only precess the first trailer "grpc-status" for now.
            if($key == "grpc-status") {
                echo "[AbstractCall.php] Receive Treailer: $header_line" . PHP_EOL;
            }
        } else {
            // TODO create a struct to save header
            echo "[AbstractCall.php] Receive Header: $header_line".PHP_EOL;
        }
        return strlen($header_line);
    }

    /**
     * @param mixed $argument The data to decode
     * @return string Base64 decoded massage
     */
    public function _encode($argument) {
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
        return $argument_data_string;
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
