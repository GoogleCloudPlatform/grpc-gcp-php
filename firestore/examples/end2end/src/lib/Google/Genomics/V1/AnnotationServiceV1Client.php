<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
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
namespace Google\Genomics\V1;

/**
 * This service provides storage and positional retrieval of genomic
 * reference annotations, including variant annotations.
 */
class AnnotationServiceV1Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new annotation set. Caller must have WRITE permission for the
     * associated dataset.
     *
     * The following fields are required:
     *
     *   * [datasetId][google.genomics.v1.AnnotationSet.dataset_id]
     *   * [referenceSetId][google.genomics.v1.AnnotationSet.reference_set_id]
     *
     * All other fields may be optionally specified, unless documented as being
     * server-generated (for example, the `id` field).
     * @param \Google\Genomics\V1\CreateAnnotationSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAnnotationSet(\Google\Genomics\V1\CreateAnnotationSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/CreateAnnotationSet',
        $argument,
        ['\Google\Genomics\V1\AnnotationSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an annotation set. Caller must have READ permission for
     * the associated dataset.
     * @param \Google\Genomics\V1\GetAnnotationSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAnnotationSet(\Google\Genomics\V1\GetAnnotationSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/GetAnnotationSet',
        $argument,
        ['\Google\Genomics\V1\AnnotationSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an annotation set. The update must respect all mutability
     * restrictions and other invariants described on the annotation set resource.
     * Caller must have WRITE permission for the associated dataset.
     * @param \Google\Genomics\V1\UpdateAnnotationSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateAnnotationSet(\Google\Genomics\V1\UpdateAnnotationSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/UpdateAnnotationSet',
        $argument,
        ['\Google\Genomics\V1\AnnotationSet', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an annotation set. Caller must have WRITE permission
     * for the associated annotation set.
     * @param \Google\Genomics\V1\DeleteAnnotationSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAnnotationSet(\Google\Genomics\V1\DeleteAnnotationSetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/DeleteAnnotationSet',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for annotation sets that match the given criteria. Annotation sets
     * are returned in an unspecified order. This order is consistent, such that
     * two queries for the same content (regardless of page size) yield annotation
     * sets in the same order across their respective streams of paginated
     * responses. Caller must have READ permission for the queried datasets.
     * @param \Google\Genomics\V1\SearchAnnotationSetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchAnnotationSets(\Google\Genomics\V1\SearchAnnotationSetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/SearchAnnotationSets',
        $argument,
        ['\Google\Genomics\V1\SearchAnnotationSetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new annotation. Caller must have WRITE permission
     * for the associated annotation set.
     *
     * The following fields are required:
     *
     * * [annotationSetId][google.genomics.v1.Annotation.annotation_set_id]
     * * [referenceName][google.genomics.v1.Annotation.reference_name] or
     *   [referenceId][google.genomics.v1.Annotation.reference_id]
     *
     * ### Transcripts
     *
     * For annotations of type TRANSCRIPT, the following fields of
     * [transcript][google.genomics.v1.Annotation.transcript] must be provided:
     *
     * * [exons.start][google.genomics.v1.Transcript.Exon.start]
     * * [exons.end][google.genomics.v1.Transcript.Exon.end]
     *
     * All other fields may be optionally specified, unless documented as being
     * server-generated (for example, the `id` field). The annotated
     * range must be no longer than 100Mbp (mega base pairs). See the
     * [Annotation resource][google.genomics.v1.Annotation]
     * for additional restrictions on each field.
     * @param \Google\Genomics\V1\CreateAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAnnotation(\Google\Genomics\V1\CreateAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/CreateAnnotation',
        $argument,
        ['\Google\Genomics\V1\Annotation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates one or more new annotations atomically. All annotations must
     * belong to the same annotation set. Caller must have WRITE
     * permission for this annotation set. For optimal performance, batch
     * positionally adjacent annotations together.
     *
     * If the request has a systemic issue, such as an attempt to write to
     * an inaccessible annotation set, the entire RPC will fail accordingly. For
     * lesser data issues, when possible an error will be isolated to the
     * corresponding batch entry in the response; the remaining well formed
     * annotations will be created normally.
     *
     * For details on the requirements for each individual annotation resource,
     * see
     * [CreateAnnotation][google.genomics.v1.AnnotationServiceV1.CreateAnnotation].
     * @param \Google\Genomics\V1\BatchCreateAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchCreateAnnotations(\Google\Genomics\V1\BatchCreateAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/BatchCreateAnnotations',
        $argument,
        ['\Google\Genomics\V1\BatchCreateAnnotationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an annotation. Caller must have READ permission
     * for the associated annotation set.
     * @param \Google\Genomics\V1\GetAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAnnotation(\Google\Genomics\V1\GetAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/GetAnnotation',
        $argument,
        ['\Google\Genomics\V1\Annotation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an annotation. Caller must have
     * WRITE permission for the associated dataset.
     * @param \Google\Genomics\V1\UpdateAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateAnnotation(\Google\Genomics\V1\UpdateAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/UpdateAnnotation',
        $argument,
        ['\Google\Genomics\V1\Annotation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an annotation. Caller must have WRITE permission for
     * the associated annotation set.
     * @param \Google\Genomics\V1\DeleteAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAnnotation(\Google\Genomics\V1\DeleteAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/DeleteAnnotation',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches for annotations that match the given criteria. Results are
     * ordered by genomic coordinate (by reference sequence, then position).
     * Annotations with equivalent genomic coordinates are returned in an
     * unspecified order. This order is consistent, such that two queries for the
     * same content (regardless of page size) yield annotations in the same order
     * across their respective streams of paginated responses. Caller must have
     * READ permission for the queried annotation sets.
     * @param \Google\Genomics\V1\SearchAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchAnnotations(\Google\Genomics\V1\SearchAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.genomics.v1.AnnotationServiceV1/SearchAnnotations',
        $argument,
        ['\Google\Genomics\V1\SearchAnnotationsResponse', 'decode'],
        $metadata, $options);
    }

}
