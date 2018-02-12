<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/resources.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

/**
 * The `VariableState` describes the last known state of the variable and is
 * used during a `variables().watch` call to distinguish the state of the
 * variable.
 *
 * Protobuf enum <code>Google\Cloud\Runtimeconfig\V1beta1\VariableState</code>
 */
class VariableState
{
    /**
     * Default variable state.
     *
     * Generated from protobuf enum <code>VARIABLE_STATE_UNSPECIFIED = 0;</code>
     */
    const VARIABLE_STATE_UNSPECIFIED = 0;
    /**
     * The variable was updated, while `variables().watch` was executing.
     *
     * Generated from protobuf enum <code>UPDATED = 1;</code>
     */
    const UPDATED = 1;
    /**
     * The variable was deleted, while `variables().watch` was executing.
     *
     * Generated from protobuf enum <code>DELETED = 2;</code>
     */
    const DELETED = 2;
}

