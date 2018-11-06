<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC.
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
//
namespace Google\Devtools\Resultstore\V2;

/**
 * This API allows download of File messages referenced in
 * ResultStore resources.
 */
class ResultStoreFileDownloadClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves the File with the given uri.
     * returns a stream of bytes to be stitched together in order.
     *
     * An error will be reported in the following cases:
     * - If the File is not found.
     * - If the given File uri is badly formatted.
     * @param \Google\Devtools\Resultstore\V2\GetFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFile(\Google\Devtools\Resultstore\V2\GetFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/google.devtools.resultstore.v2.ResultStoreFileDownload/GetFile',
        $argument,
        ['\Google\Devtools\Resultstore\V2\GetFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the tail of a File with the given uri.
     *
     * An error will be reported in the following cases:
     * - If the File is not found.
     * - If the given File uri is badly formatted.
     * @param \Google\Devtools\Resultstore\V2\GetFileTailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFileTail(\Google\Devtools\Resultstore\V2\GetFileTailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.resultstore.v2.ResultStoreFileDownload/GetFileTail',
        $argument,
        ['\Google\Devtools\Resultstore\V2\GetFileTailResponse', 'decode'],
        $metadata, $options);
    }

}
