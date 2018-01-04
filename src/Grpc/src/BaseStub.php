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
 * Base class for generated client stubs. Stub methods are expected to call
 * _simpleRequest or _streamRequest and return the result.
 */
class BaseStub
{
    private $hostname;
    private $hostname_override;
    private $channel;
    private $http_version = '2';

    // a callback function
    private $update_metadata;

    /**
     * @param string  $hostname
     * @param array   $opts
     *  - 'update_metadata': (optional) a callback function which takes in a
     * metadata array, and returns an updated metadata array
     *  - 'grpc.primary_user_agent': (optional) a user-agent string
     * @param Channel $channel An already created Channel object (optional)
     */
    public function __construct($hostname, $opts, Channel $channel = null)
    {
        // TODO: add credential
        // TODO: check libcurl version to choose HTTP version (upgrade during call->exec)

        $this->hostname = $hostname;
        $this->update_metadata = null;
        if (isset($opts['update_metadata'])) {
            if (is_callable($opts['update_metadata'])) {
                $this->update_metadata = $opts['update_metadata'];
            }
            unset($opts['update_metadata']);
        }
        $package_config = json_decode(
            file_get_contents(dirname(__FILE__).'/../../composer.json'), true);
        if (!empty($opts['grpc.primary_user_agent'])) {
            $opts['grpc.primary_user_agent'] .= ' ';
        } else {
            $opts['grpc.primary_user_agent'] = '';
        }
        if (!empty($opts['grpc.ssl_target_name_override'])) {
            $this->hostname_override = $opts['grpc.ssl_target_name_override'];
        }
        $opts['grpc.primary_user_agent'] .=
            'grpc-php/'.$package_config['version'];
        if ($channel) {
            if (!is_a($channel, 'resource')) {
                throw new \Exception('The channel argument is not a'.
                                     'cURL_multi_resource object');
            }
            $this->channel = $channel;
        } else {
            $this->channel = new Channel($hostname, $opts);
        }
    }

    /**
     * Close the communication channel associated with this stub.
     */
    public function close()
    {
        curl_multi_close($this->channel);
    }

    /**
     * constructs the auth uri for the jwt.
     *
     * @param string $method The method string
     *
     * @return string The URL string
     */
    private function _get_jwt_aud_uri($method)
    {
//        $last_slash_idx = strrpos($method, '/');
//        if ($last_slash_idx === false) {
//            throw new \InvalidArgumentException(
//                'service name must have a slash');
//        }
//        $service_name = substr($method, 0, $last_slash_idx);
//
        if ($this->hostname_override) {
            $hostname = $this->hostname_override;
        } else {
            $hostname = $this->hostname;
        }
//        $prefix = 'https://';
//        if($this->http_version == '1'){
//            $prefix = 'http://';
//        }
//        return $prefix.$hostname.$service_name;
        // TODO: why $prefix and services name are not needed.
        return $hostname.$method;
    }

    /**
     * validate and normalize the metadata array.
     *
     * @param array $metadata The metadata map
     *
     * @return array $metadata Validated and key-normalized metadata map
     * @throw InvalidArgumentException if key contains invalid characters
     */
    private function _validate_and_normalize_metadata($metadata)
    {
        $metadata_copy = [];
        foreach ($metadata as $key => $value) {
            if (!preg_match('/^[A-Za-z\d_-]+$/', $key)) {
                throw new \InvalidArgumentException(
                    'Metadata keys must be nonempty strings containing only '.
                    'alphanumeric characters, hyphens and underscores');
            }
            $metadata_copy[strtolower($key)] = $value;
        }

        return $metadata_copy;
    }

    /* This class is intended to be subclassed by generated code, so
     * all functions begin with "_" to avoid name collisions. */

    /**
     * Call a remote method that takes a single argument and has a
     * single output.
     *
     * @param string   $method      The name of the method to call
     * @param mixed    $argument    The argument to the method
     * @param callable $deserialize A function that deserializes the response
     * @param array    $metadata    A metadata map to send to the server
     *                              (optional)
     * @param array    $options     An array of options (optional)
     *
     * @return UnaryCall The active call object
     */
    protected function _simpleRequest($method,
                                   $argument,
                                   $deserialize,
                                   array $metadata = [],
                                   array $options = [])
    {
        // TODO: $this->update_metadata like grpc
        $call = new UnaryCall($this->channel,
            $this->_get_jwt_aud_uri($method),
            $deserialize,
            $options);

        $call->start($argument, $metadata, $options);

        return $call;
    }

    /**
     * Call a remote method that takes a single argument and returns a stream
     * of responses.
     *
     * @param string   $method      The name of the method to call
     * @param mixed    $argument    The argument to the method
     * @param callable $deserialize A function that deserializes the responses
     * @param array    $metadata    A metadata map to send to the server
     *                              (optional)
     * @param array    $options     An array of options (optional)
     *
     * @return ServerStreamingCall The active call object
     */
    protected function _serverStreamRequest($method,
                                            $argument,
                                            $deserialize,
                                            array $metadata = [],
                                            array $options = [])
    {
        //$jwt_aud_uri = $this->_get_jwt_aud_uri($method);
        $call = new ServerStreamingCall($this->channel,
            $this->_get_jwt_aud_uri($method),
            $deserialize,
            $options);
        $call->start($argument, $metadata, $options);
        //echo "started. $jwt_aud_uri\n";
        return $call;
    }

}