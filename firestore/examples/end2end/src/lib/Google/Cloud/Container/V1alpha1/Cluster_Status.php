<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1alpha1/cluster_service.proto

namespace Google\Cloud\Container\V1alpha1;

/**
 * The current status of the cluster.
 *
 * Protobuf enum <code>Google\Container\V1alpha1\Cluster\Status</code>
 */
class Cluster_Status
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * The PROVISIONING state indicates the cluster is being created.
     *
     * Generated from protobuf enum <code>PROVISIONING = 1;</code>
     */
    const PROVISIONING = 1;
    /**
     * The RUNNING state indicates the cluster has been created and is fully
     * usable.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The RECONCILING state indicates that some work is actively being done on
     * the cluster, such as upgrading the master or node software. Details can
     * be found in the `statusMessage` field.
     *
     * Generated from protobuf enum <code>RECONCILING = 3;</code>
     */
    const RECONCILING = 3;
    /**
     * The STOPPING state indicates the cluster is being deleted.
     *
     * Generated from protobuf enum <code>STOPPING = 4;</code>
     */
    const STOPPING = 4;
    /**
     * The ERROR state indicates the cluster may be unusable. Details
     * can be found in the `statusMessage` field.
     *
     * Generated from protobuf enum <code>ERROR = 5;</code>
     */
    const ERROR = 5;
}

