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
namespace Google\Cloud\Bigquery\Storage\V1beta1;

/**
 * BigQuery storage API.
 *
 * The BigQuery storage API can be used to read data stored in BigQuery.
 */
class BigQueryStorageClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new read session. A read session divides the contents of a
     * BigQuery table into one or more streams, which can then be used to read
     * data from the table. The read session also specifies properties of the
     * data to be read, such as a list of columns or a push-down filter describing
     * the rows to be returned.
     *
     * A particular row can be read by at most one stream. When the caller has
     * reached the end of each stream in the session, then all the data in the
     * table has been read.
     *
     * Read sessions automatically expire 24 hours after they are created and do
     * not require manual clean-up by the caller.
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\CreateReadSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateReadSession(\Google\Cloud\Bigquery\Storage\V1beta1\CreateReadSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.bigquery.storage.v1beta1.BigQueryStorage/CreateReadSession',
        $argument,
        ['\Google\Cloud\Bigquery\Storage\V1beta1\ReadSession', 'decode'],
        $metadata, $options);
    }

    /**
     * Reads rows from the table in the format prescribed by the read session.
     * Each response contains one or more table rows, up to a maximum of 10 MiB
     * per response; read requests which attempt to read individual rows larger
     * than this will fail.
     *
     * Each request also returns a set of stream statistics reflecting the
     * estimated total number of rows in the read stream. This number is computed
     * based on the total table size and the number of active streams in the read
     * session, and may change as other streams continue to read data.
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\ReadRowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadRows(\Google\Cloud\Bigquery\Storage\V1beta1\ReadRowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/google.cloud.bigquery.storage.v1beta1.BigQueryStorage/ReadRows',
        $argument,
        ['\Google\Cloud\Bigquery\Storage\V1beta1\ReadRowsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates additional streams for a ReadSession. This API can be used to
     * dynamically adjust the parallelism of a batch processing task upwards by
     * adding additional workers.
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\BatchCreateReadSessionStreamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateReadSessionStreams(\Google\Cloud\Bigquery\Storage\V1beta1\BatchCreateReadSessionStreamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.bigquery.storage.v1beta1.BigQueryStorage/BatchCreateReadSessionStreams',
        $argument,
        ['\Google\Cloud\Bigquery\Storage\V1beta1\BatchCreateReadSessionStreamsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Triggers the graceful termination of a single stream in a ReadSession. This
     * API can be used to dynamically adjust the parallelism of a batch processing
     * task downwards without losing data.
     *
     * This API does not delete the stream -- it remains visible in the
     * ReadSession, and any data processed by the stream is not released to other
     * streams. However, no additional data will be assigned to the stream once
     * this call completes. Callers must continue reading data on the stream until
     * the end of the stream is reached so that data which has already been
     * assigned to the stream will be processed.
     *
     * This method will return an error if there are no other live streams
     * in the Session, or if SplitReadStream() has been called on the given
     * Stream.
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\FinalizeStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinalizeStream(\Google\Cloud\Bigquery\Storage\V1beta1\FinalizeStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.bigquery.storage.v1beta1.BigQueryStorage/FinalizeStream',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Splits a given read stream into two Streams. These streams are referred to
     * as the primary and the residual of the split. The original stream can still
     * be read from in the same manner as before. Both of the returned streams can
     * also be read from, and the total rows return by both child streams will be
     * the same as the rows read from the original stream.
     *
     * Moreover, the two child streams will be allocated back to back in the
     * original Stream. Concretely, it is guaranteed that for streams Original,
     * Primary, and Residual, that Original[0-j] = Primary[0-j] and
     * Original[j-n] = Residual[0-m] once the streams have been read to
     * completion.
     *
     * This method is guaranteed to be idempotent.
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\SplitReadStreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SplitReadStream(\Google\Cloud\Bigquery\Storage\V1beta1\SplitReadStreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.bigquery.storage.v1beta1.BigQueryStorage/SplitReadStream',
        $argument,
        ['\Google\Cloud\Bigquery\Storage\V1beta1\SplitReadStreamResponse', 'decode'],
        $metadata, $options);
    }

}
