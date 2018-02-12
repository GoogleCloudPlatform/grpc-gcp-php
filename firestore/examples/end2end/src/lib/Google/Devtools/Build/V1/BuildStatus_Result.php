<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_status.proto

namespace Google\Devtools\Build\V1;

/**
 * The end result of the Build.
 *
 * Protobuf enum <code>Google\Devtools\Build\V1\BuildStatus\Result</code>
 */
class BuildStatus_Result
{
    /**
     * Unspecified or unknown.
     *
     * Generated from protobuf enum <code>UNKNOWN_STATUS = 0;</code>
     */
    const UNKNOWN_STATUS = 0;
    /**
     * Build was successful and tests (if requested) all pass.
     *
     * Generated from protobuf enum <code>COMMAND_SUCCEEDED = 1;</code>
     */
    const COMMAND_SUCCEEDED = 1;
    /**
     * Build error and/or test failure.
     *
     * Generated from protobuf enum <code>COMMAND_FAILED = 2;</code>
     */
    const COMMAND_FAILED = 2;
    /**
     * Unable to obtain a result due to input provided by the user.
     *
     * Generated from protobuf enum <code>USER_ERROR = 3;</code>
     */
    const USER_ERROR = 3;
    /**
     * Unable to obtain a result due to a failure within the build system.
     *
     * Generated from protobuf enum <code>SYSTEM_ERROR = 4;</code>
     */
    const SYSTEM_ERROR = 4;
    /**
     * Build required too many resources, such as build tool RAM.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED = 5;</code>
     */
    const RESOURCE_EXHAUSTED = 5;
    /**
     * An invocation attempt time exceeded its deadline.
     *
     * Generated from protobuf enum <code>INVOCATION_DEADLINE_EXCEEDED = 6;</code>
     */
    const INVOCATION_DEADLINE_EXCEEDED = 6;
    /**
     * Build request time exceeded the request_deadline
     *
     * Generated from protobuf enum <code>REQUEST_DEADLINE_EXCEEDED = 8;</code>
     */
    const REQUEST_DEADLINE_EXCEEDED = 8;
    /**
     * The build was cancelled by a call to CancelBuild.
     *
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
}

