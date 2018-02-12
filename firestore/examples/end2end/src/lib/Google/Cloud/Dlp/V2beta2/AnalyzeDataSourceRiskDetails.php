<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta2/dlp.proto

namespace Google\Cloud\Dlp\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of a risk analysis operation request.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails</code>
 */
class AnalyzeDataSourceRiskDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.PrivacyMetric requested_privacy_metric = 1;</code>
     */
    private $requested_privacy_metric = null;
    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.BigQueryTable requested_source_table = 2;</code>
     */
    private $requested_source_table = null;
    protected $result;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.PrivacyMetric requested_privacy_metric = 1;</code>
     * @return \Google\Cloud\Dlp\V2beta2\PrivacyMetric
     */
    public function getRequestedPrivacyMetric()
    {
        return $this->requested_privacy_metric;
    }

    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.PrivacyMetric requested_privacy_metric = 1;</code>
     * @param \Google\Cloud\Dlp\V2beta2\PrivacyMetric $var
     * @return $this
     */
    public function setRequestedPrivacyMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\PrivacyMetric::class);
        $this->requested_privacy_metric = $var;

        return $this;
    }

    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.BigQueryTable requested_source_table = 2;</code>
     * @return \Google\Cloud\Dlp\V2beta2\BigQueryTable
     */
    public function getRequestedSourceTable()
    {
        return $this->requested_source_table;
    }

    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.BigQueryTable requested_source_table = 2;</code>
     * @param \Google\Cloud\Dlp\V2beta2\BigQueryTable $var
     * @return $this
     */
    public function setRequestedSourceTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\BigQueryTable::class);
        $this->requested_source_table = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.NumericalStatsResult numerical_stats_result = 3;</code>
     * @return \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_NumericalStatsResult
     */
    public function getNumericalStatsResult()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.NumericalStatsResult numerical_stats_result = 3;</code>
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_NumericalStatsResult $var
     * @return $this
     */
    public function setNumericalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_NumericalStatsResult::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @return \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_CategoricalStatsResult
     */
    public function getCategoricalStatsResult()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_CategoricalStatsResult $var
     * @return $this
     */
    public function setCategoricalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_CategoricalStatsResult::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.KAnonymityResult k_anonymity_result = 5;</code>
     * @return \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KAnonymityResult
     */
    public function getKAnonymityResult()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.KAnonymityResult k_anonymity_result = 5;</code>
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KAnonymityResult $var
     * @return $this
     */
    public function setKAnonymityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KAnonymityResult::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.LDiversityResult l_diversity_result = 6;</code>
     * @return \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_LDiversityResult
     */
    public function getLDiversityResult()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.LDiversityResult l_diversity_result = 6;</code>
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_LDiversityResult $var
     * @return $this
     */
    public function setLDiversityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_LDiversityResult::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.KMapEstimationResult k_map_estimation_result = 7;</code>
     * @return \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KMapEstimationResult
     */
    public function getKMapEstimationResult()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta2.AnalyzeDataSourceRiskDetails.KMapEstimationResult k_map_estimation_result = 7;</code>
     * @param \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KMapEstimationResult $var
     * @return $this
     */
    public function setKMapEstimationResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta2\AnalyzeDataSourceRiskDetails_KMapEstimationResult::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

