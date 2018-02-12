<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1alpha1/cluster_service.proto

namespace Google\Cloud\Container\V1alpha1;

/**
 * Current status of the operation.
 *
 * Protobuf enum <code>Google\Container\V1alpha1\Operation\Status</code>
 */
class Operation_Status
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * The operation has been created.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The operation is currently running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The operation is done, either cancelled or completed.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;
    /**
     * The operation is aborting.
     *
     * Generated from protobuf enum <code>ABORTING = 4;</code>
     */
    const ABORTING = 4;
}

