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
namespace Google\Cloud\Ml\V1;

/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Proto file for the Google Cloud Machine Learning Engine.
 * Describes the 'models service' to work with the 'model' and 'version'
 * resources.
 *
 * Provides methods that create and manage machine learning models and their
 * versions.
 *
 * A model in this context is a container for versions. The model can't provide
 * predictions without first having a version created for it.
 *
 * Each version is a trained machine learning model, and each is assumed to be
 * an iteration of the same machine learning problem as the other versions of
 * the same model.
 *
 * Your project can define multiple models, each with multiple versions.
 *
 * The basic life cycle of a model is:
 *
 * *   Create and train the machine learning model and save it to a
 *     Google Cloud Storage location.
 * *   Use
 *     [projects.models.create](/ml/reference/rest/v1/projects.models/create)
 *     to make a new model in your project.
 * *   Use
 *     [projects.models.versions.create](/ml/reference/rest/v1/projects.models.versions/create)
 *     to deploy your saved model.
 * *   Use [projects.predict](/ml/reference/rest/v1/projects/predict to
 *     request predictions of a version of your model, or use
 *     [projects.jobs.create](/ml/reference/rest/v1/projects.jobs/create)
 *     to start a batch prediction job.
 */
class ModelServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a model which will later contain one or more versions.
     *
     * You must add at least one version before you can request predictions from
     * the model. Add versions by calling
     * [projects.models.versions.create](/ml/reference/rest/v1/projects.models.versions/create).
     * @param \Google\Cloud\Ml\V1\CreateModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateModel(\Google\Cloud\Ml\V1\CreateModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/CreateModel',
        $argument,
        ['\Google\Cloud\Ml\V1\Model', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the models in a project.
     *
     * Each project can contain multiple models, and each model can have multiple
     * versions.
     * @param \Google\Cloud\Ml\V1\ListModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModels(\Google\Cloud\Ml\V1\ListModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/ListModels',
        $argument,
        ['\Google\Cloud\Ml\V1\ListModelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a model, including its name, the description (if
     * set), and the default version (if at least one version of the model has
     * been deployed).
     * @param \Google\Cloud\Ml\V1\GetModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModel(\Google\Cloud\Ml\V1\GetModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/GetModel',
        $argument,
        ['\Google\Cloud\Ml\V1\Model', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a model.
     *
     * You can only delete a model if there are no versions in it. You can delete
     * versions by calling
     * [projects.models.versions.delete](/ml/reference/rest/v1/projects.models.versions/delete).
     * @param \Google\Cloud\Ml\V1\DeleteModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteModel(\Google\Cloud\Ml\V1\DeleteModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/DeleteModel',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new version of a model from a trained TensorFlow model.
     *
     * If the version created in the cloud by this call is the first deployed
     * version of the specified model, it will be made the default version of the
     * model. When you add a version to a model that already has one or more
     * versions, the default version does not automatically change. If you want a
     * new version to be the default, you must call
     * [projects.models.versions.setDefault](/ml/reference/rest/v1/projects.models.versions/setDefault).
     * @param \Google\Cloud\Ml\V1\CreateVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateVersion(\Google\Cloud\Ml\V1\CreateVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/CreateVersion',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets basic information about all the versions of a model.
     *
     * If you expect that a model has a lot of versions, or if you need to handle
     * only a limited number of results at a time, you can request that the list
     * be retrieved in batches (called pages):
     * @param \Google\Cloud\Ml\V1\ListVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListVersions(\Google\Cloud\Ml\V1\ListVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/ListVersions',
        $argument,
        ['\Google\Cloud\Ml\V1\ListVersionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a model version.
     *
     * Models can have multiple versions. You can call
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list)
     * to get the same information that this method returns for all of the
     * versions of a model.
     * @param \Google\Cloud\Ml\V1\GetVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVersion(\Google\Cloud\Ml\V1\GetVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/GetVersion',
        $argument,
        ['\Google\Cloud\Ml\V1\Version', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a model version.
     *
     * Each model can have multiple versions deployed and in use at any given
     * time. Use this method to remove a single version.
     *
     * Note: You cannot delete the version that is set as the default version
     * of the model unless it is the only remaining version.
     * @param \Google\Cloud\Ml\V1\DeleteVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteVersion(\Google\Cloud\Ml\V1\DeleteVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/DeleteVersion',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Designates a version to be the default for the model.
     *
     * The default version is used for prediction requests made against the model
     * that don't specify a version.
     *
     * The first version to be created for a model is automatically set as the
     * default. You must make any subsequent changes to the default version
     * setting manually using this method.
     * @param \Google\Cloud\Ml\V1\SetDefaultVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetDefaultVersion(\Google\Cloud\Ml\V1\SetDefaultVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.ml.v1.ModelService/SetDefaultVersion',
        $argument,
        ['\Google\Cloud\Ml\V1\Version', 'decode'],
        $metadata, $options);
    }

}
