<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 The Grafeas Authors. All rights reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//    http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Grafeas\V1beta1;

/**
 * [Grafeas](grafeas.io) API.
 *
 * Retrieves analysis results of Cloud components such as Docker container
 * images.
 *
 * Analysis results are stored as a series of occurrences. An `Occurrence`
 * contains information about a specific analysis instance on a resource. An
 * occurrence refers to a `Note`. A note contains details describing the
 * analysis and is generally stored in a separate project, called a `Provider`.
 * Multiple occurrences can refer to the same note.
 *
 * For example, an SSL vulnerability could affect multiple images. In this case,
 * there would be one note for the vulnerability and an occurrence for each
 * image with the vulnerability referring to that note.
 */
class GrafeasV1Beta1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Gets the specified occurrence.
     * @param \Grafeas\V1beta1\GetOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOccurrence(\Grafeas\V1beta1\GetOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/GetOccurrence',
        $argument,
        ['\Grafeas\V1beta1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists occurrences for the specified project.
     * @param \Grafeas\V1beta1\ListOccurrencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListOccurrences(\Grafeas\V1beta1\ListOccurrencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/ListOccurrences',
        $argument,
        ['\Grafeas\V1beta1\ListOccurrencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the specified occurrence. For example, use this method to delete an
     * occurrence when the occurrence is no longer applicable for the given
     * resource.
     * @param \Grafeas\V1beta1\DeleteOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteOccurrence(\Grafeas\V1beta1\DeleteOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/DeleteOccurrence',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new occurrence.
     * @param \Grafeas\V1beta1\CreateOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateOccurrence(\Grafeas\V1beta1\CreateOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/CreateOccurrence',
        $argument,
        ['\Grafeas\V1beta1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates new occurrences in batch.
     * @param \Grafeas\V1beta1\BatchCreateOccurrencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateOccurrences(\Grafeas\V1beta1\BatchCreateOccurrencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/BatchCreateOccurrences',
        $argument,
        ['\Grafeas\V1beta1\BatchCreateOccurrencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the specified occurrence.
     * @param \Grafeas\V1beta1\UpdateOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateOccurrence(\Grafeas\V1beta1\UpdateOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/UpdateOccurrence',
        $argument,
        ['\Grafeas\V1beta1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the note attached to the specified occurrence. Consumer projects can
     * use this method to get a note that belongs to a provider project.
     * @param \Grafeas\V1beta1\GetOccurrenceNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOccurrenceNote(\Grafeas\V1beta1\GetOccurrenceNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/GetOccurrenceNote',
        $argument,
        ['\Grafeas\V1beta1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the specified note.
     * @param \Grafeas\V1beta1\GetNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNote(\Grafeas\V1beta1\GetNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/GetNote',
        $argument,
        ['\Grafeas\V1beta1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists notes for the specified project.
     * @param \Grafeas\V1beta1\ListNotesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNotes(\Grafeas\V1beta1\ListNotesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/ListNotes',
        $argument,
        ['\Grafeas\V1beta1\ListNotesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the specified note.
     * @param \Grafeas\V1beta1\DeleteNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteNote(\Grafeas\V1beta1\DeleteNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/DeleteNote',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new note.
     * @param \Grafeas\V1beta1\CreateNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateNote(\Grafeas\V1beta1\CreateNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/CreateNote',
        $argument,
        ['\Grafeas\V1beta1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates new notes in batch.
     * @param \Grafeas\V1beta1\BatchCreateNotesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateNotes(\Grafeas\V1beta1\BatchCreateNotesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/BatchCreateNotes',
        $argument,
        ['\Grafeas\V1beta1\BatchCreateNotesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the specified note.
     * @param \Grafeas\V1beta1\UpdateNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateNote(\Grafeas\V1beta1\UpdateNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/UpdateNote',
        $argument,
        ['\Grafeas\V1beta1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists occurrences referencing the specified note. Provider projects can use
     * this method to get all occurrences across consumer projects referencing the
     * specified note.
     * @param \Grafeas\V1beta1\ListNoteOccurrencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNoteOccurrences(\Grafeas\V1beta1\ListNoteOccurrencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/ListNoteOccurrences',
        $argument,
        ['\Grafeas\V1beta1\ListNoteOccurrencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a summary of the number and severity of occurrences.
     * @param \Grafeas\V1beta1\GetVulnerabilityOccurrencesSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVulnerabilityOccurrencesSummary(\Grafeas\V1beta1\GetVulnerabilityOccurrencesSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grafeas.v1beta1.GrafeasV1Beta1/GetVulnerabilityOccurrencesSummary',
        $argument,
        ['\Grafeas\V1beta1\VulnerabilityOccurrencesSummary', 'decode'],
        $metadata, $options);
    }

}
