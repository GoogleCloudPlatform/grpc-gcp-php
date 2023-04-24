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
 * Represents an active call that sends a single message and then gets a
 * stream of responses.
 */
class ServerStreamingCall extends AbstractCall
{
    // $received_data is an iterator saving response from WRITE callback funtion.
    protected $received_data;
    // $has_new_received_data let iterator return the new data immediately
    // without block until all response received
    protected $has_new_received_data = false;
    protected $status = "init";
    protected $frame_len = 0;
    protected $frame_len_read_pos = 0;
    protected $frame_pos = 0;
    protected $frame_data = "";

    protected $request_data = "";
    protected $request_data_pos = 0;

    public function __construct($channel,
                                $method,
                                $deserialize,
                                array $options = []){
        $this->received_data = new \ArrayIterator();
        parent::__construct($channel, $method, $deserialize, $options);
    }
    /**
     * Start the call.
     *
     * @param mixed $data     The data to send
     * @param array $metadata Metadata to send with the call, if applicable
     *                        (optional)
     * @param array $options  An array of options, possible keys:
     *                        'flags' => a number (optional)
     */
    public function start($data, array $metadata = [], array $options = [])
    {
        $this->request_data = $this->_encode($data);
        curl_setopt($this->curl_handler, CURLOPT_READFUNCTION, function ($ch, $fh, $length = false)
        {
            $start_pos = $this->request_data_pos;
            $this->request_data_pos += 1024;
            if($this->request_data_pos > strlen($this->request_data)){
                // send last request part;
                $this->call_status = "send_request_done";
            }
            $request_len = min(strlen($this->request_data)-$start_pos, 1024);
            return substr($this->request_data, $start_pos, $request_len);
        });

        curl_setopt($this->curl_handler, CURLOPT_WRITEFUNCTION, function(&$ch, $data) {
            // echo "[ServerStreamingCall.php] chunk received: ".$data."\n";
            $this->call_status = "receive_response_begin";
            $data_len = strlen($data);
            $pos = 0;
            while($pos < $data_len) {
                switch ($this->status){
                    case "init":
                        // TODO: add compression bit check
                        $this->status = "length";
                        break;
                    case "length":
                        if($this->frame_len_read_pos == 4){
                            $this->frame_len = 0;
                            $this->frame_len_read_pos = 0;
                        }
                        $this->frame_len = ($this->frame_len << 8) + ord($data[$pos]);
                        $this->frame_len_read_pos++;
                        if($this->frame_len_read_pos == 4){
                            $this->status = "message";
                        }
                        break;
                    case "message":
                        if($this->frame_pos < $this->frame_len) {
                            $this->frame_data = $this->frame_data.$data[$pos];
                        }
                        $this->frame_pos++;
                        if($this->frame_pos == $this->frame_len){
                            $this->status = "init";
                            $this->frame_pos = 0;
                            $this->received_data->append($this->_deserializeResponse($this->frame_data));
                            $this->has_new_received_data = true;
                            $this->frame_data = "";
                        }
                        break;
                    case "invalid":
                        break;
                    default:
                        break;
                }
                $pos++;
            }
            return strlen($data); // returning non-positive number aborts further transfer
        });

        curl_multi_add_handle($this->multi_handler, $this->curl_handler);
        curl_multi_setopt($this->multi_handler, CURLMOPT_PIPELINING, 1);
        curl_multi_setopt($this->multi_handler, CURLMOPT_MAXCONNECTS, 1);

        curl_multi_add_handle($this->multi_handler, $this->curl_handler);
        $active = null;
        while($this->call_status != "send_request_done"){
            curl_multi_exec($this->multi_handler, $active);
        }
    }

    /**
     * @return mixed An iterator of response values
     */
    public function responses()
    {
        $active = null;
        while (!$this->channel->is_ch_finished($this->curl_handler) || $this->received_data->valid()) {
            // echo $active." ";
            if($this->received_data->valid()){
                yield $this->received_data->current();
                $this->received_data->next();
            }
            if(!$this->channel->is_ch_finished($this->curl_handler)) {
                do {
                    curl_multi_exec($this->multi_handler, $active);
                    curl_multi_select($this->multi_handler);
                    $info = curl_multi_info_read($this->multi_handler);
                    if (false !== $info) {
                        $done_ch = $info['handle'];
                        $this->channel->unregister_ch($done_ch);
                    }
                    if ($this->has_new_received_data) {
                        $this->receive_new_data = false;
                        break;
                    }
                } while ($active > 0 && !$this->has_new_received_data);
            }
        }

        curl_multi_remove_handle($this->multi_handler, $this->curl_handler);
        curl_close($this->curl_handler);
    }

    /**
     * TODO: support grpc APIs:
     * public function getStatus() {}
     * public function getMetadata() {}
     */

}
