<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1beta1/finding.proto

namespace Google\Cloud\Securitycenter\V1beta1\Finding;

/**
 * The state of the finding.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1beta1.Finding.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The finding requires attention and has not been addressed yet.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The finding has been fixed, triaged as a non-issue or otherwise addressed
     * and is no longer active.
     *
     * Generated from protobuf enum <code>INACTIVE = 2;</code>
     */
    const INACTIVE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Securitycenter\V1beta1\Finding_State::class);
