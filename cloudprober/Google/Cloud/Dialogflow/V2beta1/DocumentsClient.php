<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC
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
namespace Google\Cloud\Dialogflow\V2beta1;

/**
 * Manages documents of a knowledge base.
 */
class DocumentsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the list of all documents of the knowledge base.
     * @param \Google\Cloud\Dialogflow\V2beta1\ListDocumentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDocuments(\Google\Cloud\Dialogflow\V2beta1\ListDocumentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Documents/ListDocuments',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\ListDocumentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the specified document.
     * @param \Google\Cloud\Dialogflow\V2beta1\GetDocumentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDocument(\Google\Cloud\Dialogflow\V2beta1\GetDocumentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Documents/GetDocument',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Document', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new document.
     *
     * Operation <response: [Document][google.cloud.dialogflow.v2beta1.Document],
     *            metadata: [KnowledgeOperationMetadata][google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata]>
     * @param \Google\Cloud\Dialogflow\V2beta1\CreateDocumentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateDocument(\Google\Cloud\Dialogflow\V2beta1\CreateDocumentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Documents/CreateDocument',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the specified document.
     *
     * Operation <response: [google.protobuf.Empty][google.protobuf.Empty],
     *            metadata: [KnowledgeOperationMetadata][google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata]>
     * @param \Google\Cloud\Dialogflow\V2beta1\DeleteDocumentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteDocument(\Google\Cloud\Dialogflow\V2beta1\DeleteDocumentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Documents/DeleteDocument',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
