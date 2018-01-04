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
    protected $received_data;
    protected $receive_new_data = false;
    protected $stream_end = false;

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
    protected $status = "init";
    protected $frame_len = 0;
    protected $frame_len_pos = 0;
    protected $frame_type = "DATA";
    protected $frame_pos = 0;
    protected $frame_data = "";
    public function start($data, array $metadata = [], array $options = [])
    {
        $input_data = $this->_base64encode($data);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $input_data);
        curl_setopt($this->ch, CURLOPT_WRITEFUNCTION, function(&$ch, $data) {
            // echo "\n\nchunk received:\n", $data."\n"; // process your chunk here
            $respose_data = base64_decode($data);
            $data_len = strlen($respose_data);
            $pos = 0;
            while($pos < $data_len) {
                switch ($this->status){
                    case "init":
                        if(ord($respose_data[$pos]) == 0x80){
                            $this->frame_type = "TRAILER";
                        }
                        if (ord($respose_data[0]) == 0x00) {
                            $this->frame_type = "DATA";
                        }
                        $this->status = "length";
                        break;
                    case "length":
                        if($this->frame_len_pos == 4){
                            $this->frame_len = 0;
                            $this->frame_len_pos = 0;
                        }
                        $this->frame_len = ($this->frame_len << 8) + ord($respose_data[$pos]);
                        $this->frame_len_pos++;
                        if($this->frame_len_pos == 4){
                            $this->status = "message";
                        }
                        break;
                    case "message":
                        if($this->frame_pos < $this->frame_len) {
                            $this->frame_data = $this->frame_data.$respose_data[$pos];
                        }
                        $this->frame_pos++;
                        if($this->frame_pos == $this->frame_len){
                            $this->status = "init";
                            $this->frame_pos = 0;
                            if($this->frame_type == "DATA"){
                                $this->received_data->append($this->_deserializeResponse($this->frame_data));
                                $this->receive_new_data = true;
                                $this->frame_data = "";
                            } else{
                                echo "trailing: \n".$this->frame_data."\n";
                                $this->frame_data = "";
                                $this->stream_end = true;
                                // TODO: split by \r\n then by ":" and save into a global map
                            }
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

        curl_multi_add_handle($this->channel->getMh(), $this->ch);
        curl_multi_setopt($this->channel->getMh(), CURLMOPT_PIPELINING, 1);
        curl_multi_setopt($this->channel->getMh(), CURLMOPT_MAXCONNECTS, 1);

        curl_multi_add_handle($this->channel->getMh(), $this->ch);
        $active = null;
        curl_multi_exec($this->channel->getMh(), $active);
    }

    /**
     * @return mixed An iterator of response values
     */
    public function responses()
    {
        $active = null;
        while (!$this->stream_end || $this->received_data->valid()) {
            if($this->received_data->valid()){
                yield $this->received_data->current();
                $this->received_data->next();
            }
            do {
                curl_multi_exec($this->channel->getMh(), $active);
                curl_multi_select($this->channel->getMh());
                if($this->receive_new_data) {
                    $this->receive_new_data = false;
                    break;
                }
            } while ($active > 0 && !$this->receive_new_data);
        }
        curl_multi_remove_handle($this->channel->getMh(), $this->ch);
        curl_close($this->ch);
    }

    /**
     * TODO: support grpc APIs:
     * public function getStatus() {}
     * public function getMetadata() {}
     */

}