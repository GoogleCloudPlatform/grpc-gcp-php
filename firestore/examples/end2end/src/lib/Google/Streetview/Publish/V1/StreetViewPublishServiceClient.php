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
namespace Google\Streetview\Publish\V1;

/**
 * Definition of the service that backs the Street View Publish API.
 *
 * Publishes and connects user-contributed photos on Street View.
 */
class StreetViewPublishServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates an upload session to start uploading photo data. The upload URL of
     * the returned `UploadRef` is used to upload the data for the photo.
     *
     * After the upload is complete, the `UploadRef` is used with
     * `StreetViewPublishService:CreatePhoto()` to create the `Photo` object
     * entry.
     * @param \Google\Protobuf\Empty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StartUpload(\Google\Protobuf\Empty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/StartUpload',
        $argument,
        ['\Google\Streetview\Publish\V1\UploadRef', 'decode'],
        $metadata, $options);
    }

    /**
     * After the client finishes uploading the photo with the returned
     * `UploadRef`, `photo.create` publishes the uploaded photo to Street View on
     * Google Maps.
     *
     * This method returns the following error codes:
     *
     * * `INVALID_ARGUMENT` if the request is malformed.
     * * `NOT_FOUND` if the upload reference does not exist.
     * @param \Google\Streetview\Publish\V1\CreatePhotoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreatePhoto(\Google\Streetview\Publish\V1\CreatePhotoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/CreatePhoto',
        $argument,
        ['\Google\Streetview\Publish\V1\Photo', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the metadata of the specified `Photo`.
     *
     * This method returns the following error codes:
     *
     * * `PERMISSION_DENIED` if the requesting user did not create the requested
     * photo.
     * * `NOT_FOUND` if the requested photo does not exist.
     * @param \Google\Streetview\Publish\V1\GetPhotoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPhoto(\Google\Streetview\Publish\V1\GetPhotoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/GetPhoto',
        $argument,
        ['\Google\Streetview\Publish\V1\Photo', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the metadata of the specified `Photo` batch.
     *
     * Note that if `photos.batchGet` fails, either critical fields are
     * missing or there was an authentication error.
     * Even if `photos.batchGet` succeeds, there may have been failures
     * for single photos in the batch. These failures will be specified in
     * `BatchGetPhotosResponse.results.status`.
     * See `photo.get` for specific failures that will occur per photo.
     * @param \Google\Streetview\Publish\V1\BatchGetPhotosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchGetPhotos(\Google\Streetview\Publish\V1\BatchGetPhotosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/BatchGetPhotos',
        $argument,
        ['\Google\Streetview\Publish\V1\BatchGetPhotosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all the photos that belong to the user.
     * @param \Google\Streetview\Publish\V1\ListPhotosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPhotos(\Google\Streetview\Publish\V1\ListPhotosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/ListPhotos',
        $argument,
        ['\Google\Streetview\Publish\V1\ListPhotosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the metadata of a photo, such as pose, place association, etc.
     * Changing the pixels of a photo is not supported.
     *
     * This method returns the following error codes:
     *
     * * `PERMISSION_DENIED` if the requesting user did not create the requested
     * photo.
     * * `INVALID_ARGUMENT` if the request is malformed.
     * * `NOT_FOUND` if the photo ID does not exist.
     * @param \Google\Streetview\Publish\V1\UpdatePhotoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdatePhoto(\Google\Streetview\Publish\V1\UpdatePhotoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/UpdatePhoto',
        $argument,
        ['\Google\Streetview\Publish\V1\Photo', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the metadata of photos, such as pose, place association, etc.
     * Changing the pixels of a photo is not supported.
     *
     * Note that if `photos.batchUpdate` fails, either critical fields
     * are missing or there was an authentication error.
     * Even if `photos.batchUpdate` succeeds, there may have been
     * failures for single photos in the batch. These failures will be specified
     * in `BatchUpdatePhotosResponse.results.status`.
     * See `UpdatePhoto` for specific failures that will occur per photo.
     * @param \Google\Streetview\Publish\V1\BatchUpdatePhotosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchUpdatePhotos(\Google\Streetview\Publish\V1\BatchUpdatePhotosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/BatchUpdatePhotos',
        $argument,
        ['\Google\Streetview\Publish\V1\BatchUpdatePhotosResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a photo and its metadata.
     *
     * This method returns the following error codes:
     *
     * * `PERMISSION_DENIED` if the requesting user did not create the requested
     * photo.
     * * `NOT_FOUND` if the photo ID does not exist.
     * @param \Google\Streetview\Publish\V1\DeletePhotoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeletePhoto(\Google\Streetview\Publish\V1\DeletePhotoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/DeletePhoto',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a list of photos and their metadata.
     *
     * Note that if `photos.batchDelete` fails, either critical fields
     * are missing or there was an authentication error.
     * Even if `photos.batchDelete` succeeds, there may have been
     * failures for single photos in the batch. These failures will be specified
     * in `BatchDeletePhotosResponse.status`.
     * See `photo.update` for specific failures that will occur per photo.
     * @param \Google\Streetview\Publish\V1\BatchDeletePhotosRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchDeletePhotos(\Google\Streetview\Publish\V1\BatchDeletePhotosRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.streetview.publish.v1.StreetViewPublishService/BatchDeletePhotos',
        $argument,
        ['\Google\Streetview\Publish\V1\BatchDeletePhotosResponse', 'decode'],
        $metadata, $options);
    }

}
