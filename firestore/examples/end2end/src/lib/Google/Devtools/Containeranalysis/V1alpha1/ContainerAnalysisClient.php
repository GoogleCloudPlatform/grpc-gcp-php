<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
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
namespace Google\Devtools\Containeranalysis\V1alpha1;

/**
 * Retrieves the results of vulnerability scanning of cloud components such as
 * container images. The Container Analysis API is an implementation of the
 * [Grafeas](grafeas.io) API.
 *
 * The vulnerability results are stored as a series of Occurrences.
 * An `Occurrence` contains information about a specific vulnerability in a
 * resource. An `Occurrence` references a `Note`. A `Note` contains details
 * about the vulnerability and is stored in a stored in a separate project.
 * Multiple `Occurrences` can reference the same `Note`. For example, an SSL
 * vulnerability could affect multiple packages in an image. In this case,
 * there would be one `Note` for the vulnerability and an `Occurrence` for
 * each package with the vulnerability referencing that `Note`.
 */
class ContainerAnalysisClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested `Occurrence`.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\GetOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOccurrence(\Google\Devtools\Containeranalysis\V1alpha1\GetOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/GetOccurrence',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists active `Occurrences` for a given project matching the filters.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\ListOccurrencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListOccurrences(\Google\Devtools\Containeranalysis\V1alpha1\ListOccurrencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/ListOccurrences',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\ListOccurrencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the given `Occurrence` from the system. Use this when
     * an `Occurrence` is no longer applicable for the given resource.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\DeleteOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteOccurrence(\Google\Devtools\Containeranalysis\V1alpha1\DeleteOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/DeleteOccurrence',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new `Occurrence`. Use this method to create `Occurrences`
     * for a resource.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\CreateOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateOccurrence(\Google\Devtools\Containeranalysis\V1alpha1\CreateOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/CreateOccurrence',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing occurrence.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\UpdateOccurrenceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateOccurrence(\Google\Devtools\Containeranalysis\V1alpha1\UpdateOccurrenceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/UpdateOccurrence',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Occurrence', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the `Note` attached to the given `Occurrence`.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\GetOccurrenceNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOccurrenceNote(\Google\Devtools\Containeranalysis\V1alpha1\GetOccurrenceNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/GetOccurrenceNote',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the requested `Note`.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\GetNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNote(\Google\Devtools\Containeranalysis\V1alpha1\GetNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/GetNote',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all `Notes` for a given project.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\ListNotesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNotes(\Google\Devtools\Containeranalysis\V1alpha1\ListNotesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/ListNotes',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\ListNotesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the given `Note` from the system.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\DeleteNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteNote(\Google\Devtools\Containeranalysis\V1alpha1\DeleteNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/DeleteNote',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new `Note`.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\CreateNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateNote(\Google\Devtools\Containeranalysis\V1alpha1\CreateNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/CreateNote',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an existing `Note`.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\UpdateNoteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateNote(\Google\Devtools\Containeranalysis\V1alpha1\UpdateNoteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/UpdateNote',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\Note', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists `Occurrences` referencing the specified `Note`. Use this method to
     * get all occurrences referencing your `Note` across all your customer
     * projects.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\ListNoteOccurrencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNoteOccurrences(\Google\Devtools\Containeranalysis\V1alpha1\ListNoteOccurrencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/ListNoteOccurrences',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\ListNoteOccurrencesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a summary of the number and severity of occurrences.
     * @param \Google\Devtools\Containeranalysis\V1alpha1\GetVulnzOccurrencesSummaryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVulnzOccurrencesSummary(\Google\Devtools\Containeranalysis\V1alpha1\GetVulnzOccurrencesSummaryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/GetVulnzOccurrencesSummary',
        $argument,
        ['\Google\Devtools\Containeranalysis\V1alpha1\GetVulnzOccurrencesSummaryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the access control policy on the specified `Note` or `Occurrence`.
     * Requires `containeranalysis.notes.setIamPolicy` or
     * `containeranalysis.occurrences.setIamPolicy` permission if the resource is
     * a `Note` or an `Occurrence`, respectively.
     * Attempting to call this method without these permissions will result in a `
     * `PERMISSION_DENIED` error.
     * Attempting to call this method on a non-existent resource will result in a
     * `NOT_FOUND` error if the user has `containeranalysis.notes.list` permission
     * on a `Note` or `containeranalysis.occurrences.list` on an `Occurrence`, or
     * a `PERMISSION_DENIED` error otherwise. The resource takes the following
     * formats: `projects/{projectid}/occurrences/{occurrenceid}` for occurrences
     * and projects/{projectid}/notes/{noteid} for notes
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the access control policy for a note or an `Occurrence` resource.
     * Requires `containeranalysis.notes.setIamPolicy` or
     * `containeranalysis.occurrences.setIamPolicy` permission if the resource is
     * a note or occurrence, respectively.
     * Attempting to call this method on a resource without the required
     * permission will result in a `PERMISSION_DENIED` error. Attempting to call
     * this method on a non-existent resource will result in a `NOT_FOUND` error
     * if the user has list permission on the project, or a `PERMISSION_DENIED`
     * error otherwise. The resource takes the following formats:
     * `projects/{PROJECT_ID}/occurrences/{OCCURRENCE_ID}` for occurrences and
     * projects/{PROJECT_ID}/notes/{NOTE_ID} for notes
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the permissions that a caller has on the specified note or
     * occurrence resource. Requires list permission on the project (for example,
     * "storage.objects.list" on the containing bucket for testing permission of
     * an object). Attempting to call this method on a non-existent resource will
     * result in a `NOT_FOUND` error if the user has list permission on the
     * project, or a `PERMISSION_DENIED` error otherwise. The resource takes the
     * following formats: `projects/{PROJECT_ID}/occurrences/{OCCURRENCE_ID}` for
     * `Occurrences` and `projects/{PROJECT_ID}/notes/{NOTE_ID}` for `Notes`
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.containeranalysis.v1alpha1.ContainerAnalysis/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
