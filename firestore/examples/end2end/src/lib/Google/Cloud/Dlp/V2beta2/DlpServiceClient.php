<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google Inc.
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
namespace Google\Cloud\Dlp\V2beta2;

/**
 * The DLP API is a service that allows clients
 * to detect the presence of Personally Identifiable Information (PII) and other
 * privacy-sensitive data in user-supplied, unstructured data streams, like text
 * blocks or images.
 * The service also includes methods for sensitive data redaction and
 * scheduling of data scans on Google Cloud Platform based data sets.
 */
class DlpServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Finds potentially sensitive info in content.
     * This method has limits on input size, processing time, and output size.
     * [How-to guide for text](/dlp/docs/inspecting-text), [How-to guide for
     * images](/dlp/docs/inspecting-images)
     * @param \Google\Cloud\Dlp\V2beta2\InspectContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InspectContent(\Google\Cloud\Dlp\V2beta2\InspectContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/InspectContent',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\InspectContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Redacts potentially sensitive info from an image.
     * This method has limits on input size, processing time, and output size.
     * [How-to guide](/dlp/docs/redacting-sensitive-data-images)
     * @param \Google\Cloud\Dlp\V2beta2\RedactImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RedactImage(\Google\Cloud\Dlp\V2beta2\RedactImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/RedactImage',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\RedactImageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * De-identifies potentially sensitive info from a ContentItem.
     * This method has limits on input size and output size.
     * [How-to guide](/dlp/docs/deidentify-sensitive-data)
     * @param \Google\Cloud\Dlp\V2beta2\DeidentifyContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeidentifyContent(\Google\Cloud\Dlp\V2beta2\DeidentifyContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/DeidentifyContent',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DeidentifyContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Re-identify content that has been de-identified.
     * @param \Google\Cloud\Dlp\V2beta2\ReidentifyContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReidentifyContent(\Google\Cloud\Dlp\V2beta2\ReidentifyContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/ReidentifyContent',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\ReidentifyContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Schedules a job scanning content in a Google Cloud Platform data
     * repository. [How-to guide](/dlp/docs/inspecting-storage)
     * @param \Google\Cloud\Dlp\V2beta2\InspectDataSourceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InspectDataSource(\Google\Cloud\Dlp\V2beta2\InspectDataSourceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/InspectDataSource',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DlpJob', 'decode'],
        $metadata, $options);
    }

    /**
     * Schedules a job to compute risk analysis metrics over content in a Google
     * Cloud Platform repository. [How-to guide](/dlp/docs/compute-risk-analysis)
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AnalyzeDataSourceRisk(\Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/AnalyzeDataSourceRisk',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DlpJob', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns sensitive information types DLP supports.
     * @param \Google\Cloud\Dlp\V2beta2\ListInfoTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInfoTypes(\Google\Cloud\Dlp\V2beta2\ListInfoTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/ListInfoTypes',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\ListInfoTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates an inspect template for re-using frequently used configuration
     * for inspecting content, images, and storage.
     * @param \Google\Cloud\Dlp\V2beta2\CreateInspectTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInspectTemplate(\Google\Cloud\Dlp\V2beta2\CreateInspectTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/CreateInspectTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\InspectTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the inspect template.
     * @param \Google\Cloud\Dlp\V2beta2\UpdateInspectTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInspectTemplate(\Google\Cloud\Dlp\V2beta2\UpdateInspectTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/UpdateInspectTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\InspectTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an inspect template.
     * @param \Google\Cloud\Dlp\V2beta2\GetInspectTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInspectTemplate(\Google\Cloud\Dlp\V2beta2\GetInspectTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/GetInspectTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\InspectTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists inspect templates.
     * @param \Google\Cloud\Dlp\V2beta2\ListInspectTemplatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInspectTemplates(\Google\Cloud\Dlp\V2beta2\ListInspectTemplatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/ListInspectTemplates',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\ListInspectTemplatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes inspect templates.
     * @param \Google\Cloud\Dlp\V2beta2\DeleteInspectTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInspectTemplate(\Google\Cloud\Dlp\V2beta2\DeleteInspectTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/DeleteInspectTemplate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates an Deidentify template for re-using frequently used configuration
     * for Deidentifying content, images, and storage.
     * @param \Google\Cloud\Dlp\V2beta2\CreateDeidentifyTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateDeidentifyTemplate(\Google\Cloud\Dlp\V2beta2\CreateDeidentifyTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/CreateDeidentifyTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DeidentifyTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the inspect template.
     * @param \Google\Cloud\Dlp\V2beta2\UpdateDeidentifyTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateDeidentifyTemplate(\Google\Cloud\Dlp\V2beta2\UpdateDeidentifyTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/UpdateDeidentifyTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DeidentifyTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an inspect template.
     * @param \Google\Cloud\Dlp\V2beta2\GetDeidentifyTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDeidentifyTemplate(\Google\Cloud\Dlp\V2beta2\GetDeidentifyTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/GetDeidentifyTemplate',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DeidentifyTemplate', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists inspect templates.
     * @param \Google\Cloud\Dlp\V2beta2\ListDeidentifyTemplatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDeidentifyTemplates(\Google\Cloud\Dlp\V2beta2\ListDeidentifyTemplatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/ListDeidentifyTemplates',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\ListDeidentifyTemplatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes inspect templates.
     * @param \Google\Cloud\Dlp\V2beta2\DeleteDeidentifyTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteDeidentifyTemplate(\Google\Cloud\Dlp\V2beta2\DeleteDeidentifyTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/DeleteDeidentifyTemplate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists DlpJobs that match the specified filter in the request.
     * @param \Google\Cloud\Dlp\V2beta2\ListDlpJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDlpJobs(\Google\Cloud\Dlp\V2beta2\ListDlpJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/ListDlpJobs',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\ListDlpJobsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the latest state of a long-running DlpJob.
     * @param \Google\Cloud\Dlp\V2beta2\GetDlpJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDlpJob(\Google\Cloud\Dlp\V2beta2\GetDlpJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/GetDlpJob',
        $argument,
        ['\Google\Cloud\Dlp\V2beta2\DlpJob', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a long-running DlpJob. This method indicates that the client is
     * no longer interested in the DlpJob result. The job will be cancelled if
     * possible.
     * @param \Google\Cloud\Dlp\V2beta2\DeleteDlpJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteDlpJob(\Google\Cloud\Dlp\V2beta2\DeleteDlpJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/DeleteDlpJob',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Starts asynchronous cancellation on a long-running DlpJob.  The server
     * makes a best effort to cancel the DlpJob, but success is not
     * guaranteed.
     * @param \Google\Cloud\Dlp\V2beta2\CancelDlpJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelDlpJob(\Google\Cloud\Dlp\V2beta2\CancelDlpJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.privacy.dlp.v2beta2.DlpService/CancelDlpJob',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
