<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

/**
 * A stage representing a role's lifecycle phase.
 *
 * Protobuf enum <code>Google\Iam\Admin\V1\Role\RoleLaunchStage</code>
 */
class Role_RoleLaunchStage
{
    /**
     * The user has indicated this role is currently in an alpha phase.
     *
     * Generated from protobuf enum <code>ALPHA = 0;</code>
     */
    const ALPHA = 0;
    /**
     * The user has indicated this role is currently in a beta phase.
     *
     * Generated from protobuf enum <code>BETA = 1;</code>
     */
    const BETA = 1;
    /**
     * The user has indicated this role is generally available.
     *
     * Generated from protobuf enum <code>GA = 2;</code>
     */
    const GA = 2;
    /**
     * The user has indicated this role is being deprecated.
     *
     * Generated from protobuf enum <code>DEPRECATED = 4;</code>
     */
    const DEPRECATED = 4;
    /**
     * This role is disabled and will not contribute permissions to any members
     * it is granted to in policies.
     *
     * Generated from protobuf enum <code>DISABLED = 5;</code>
     */
    const DISABLED = 5;
    /**
     * The user has indicated this role is currently in an eap phase.
     *
     * Generated from protobuf enum <code>EAP = 6;</code>
     */
    const EAP = 6;
}

