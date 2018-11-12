<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1\Job;

/**
 * Describes the job state.
 *
 * Protobuf type <code>google.cloud.ml.v1.Job.State</code>
 */
class State
{
    /**
     * The job state is unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The job has been just created and processing has not yet begun.
     *
     * Generated from protobuf enum <code>QUEUED = 1;</code>
     */
    const QUEUED = 1;
    /**
     * The service is preparing to run the job.
     *
     * Generated from protobuf enum <code>PREPARING = 2;</code>
     */
    const PREPARING = 2;
    /**
     * The job is in progress.
     *
     * Generated from protobuf enum <code>RUNNING = 3;</code>
     */
    const RUNNING = 3;
    /**
     * The job completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * The job failed.
     * `error_message` should contain the details of the failure.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * The job is being cancelled.
     * `error_message` should describe the reason for the cancellation.
     *
     * Generated from protobuf enum <code>CANCELLING = 6;</code>
     */
    const CANCELLING = 6;
    /**
     * The job has been cancelled.
     * `error_message` should describe the reason for the cancellation.
     *
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Ml\V1\Job_State::class);
