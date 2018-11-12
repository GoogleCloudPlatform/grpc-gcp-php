<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents results of a training job. Output only.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.TrainingOutput</code>
 */
class TrainingOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>int64 completed_trial_count = 1;</code>
     */
    private $completed_trial_count = 0;
    /**
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.HyperparameterOutput trials = 2;</code>
     */
    private $trials;
    /**
     * The amount of ML units consumed by the job.
     *
     * Generated from protobuf field <code>double consumed_ml_units = 3;</code>
     */
    private $consumed_ml_units = 0.0;
    /**
     * Whether this job is a hyperparameter tuning job.
     *
     * Generated from protobuf field <code>bool is_hyperparameter_tuning_job = 4;</code>
     */
    private $is_hyperparameter_tuning_job = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $completed_trial_count
     *           The number of hyperparameter tuning trials that completed successfully.
     *           Only set for hyperparameter tuning jobs.
     *     @type \Google\Cloud\Ml\V1\HyperparameterOutput[]|\Google\Protobuf\Internal\RepeatedField $trials
     *           Results for individual Hyperparameter trials.
     *           Only set for hyperparameter tuning jobs.
     *     @type float $consumed_ml_units
     *           The amount of ML units consumed by the job.
     *     @type bool $is_hyperparameter_tuning_job
     *           Whether this job is a hyperparameter tuning job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>int64 completed_trial_count = 1;</code>
     * @return int|string
     */
    public function getCompletedTrialCount()
    {
        return $this->completed_trial_count;
    }

    /**
     * The number of hyperparameter tuning trials that completed successfully.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>int64 completed_trial_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompletedTrialCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->completed_trial_count = $var;

        return $this;
    }

    /**
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.HyperparameterOutput trials = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrials()
    {
        return $this->trials;
    }

    /**
     * Results for individual Hyperparameter trials.
     * Only set for hyperparameter tuning jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.HyperparameterOutput trials = 2;</code>
     * @param \Google\Cloud\Ml\V1\HyperparameterOutput[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Ml\V1\HyperparameterOutput::class);
        $this->trials = $arr;

        return $this;
    }

    /**
     * The amount of ML units consumed by the job.
     *
     * Generated from protobuf field <code>double consumed_ml_units = 3;</code>
     * @return float
     */
    public function getConsumedMlUnits()
    {
        return $this->consumed_ml_units;
    }

    /**
     * The amount of ML units consumed by the job.
     *
     * Generated from protobuf field <code>double consumed_ml_units = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setConsumedMlUnits($var)
    {
        GPBUtil::checkDouble($var);
        $this->consumed_ml_units = $var;

        return $this;
    }

    /**
     * Whether this job is a hyperparameter tuning job.
     *
     * Generated from protobuf field <code>bool is_hyperparameter_tuning_job = 4;</code>
     * @return bool
     */
    public function getIsHyperparameterTuningJob()
    {
        return $this->is_hyperparameter_tuning_job;
    }

    /**
     * Whether this job is a hyperparameter tuning job.
     *
     * Generated from protobuf field <code>bool is_hyperparameter_tuning_job = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsHyperparameterTuningJob($var)
    {
        GPBUtil::checkBool($var);
        $this->is_hyperparameter_tuning_job = $var;

        return $this;
    }

}
