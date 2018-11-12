<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Cloud\ServiceManagement\V1\Diagnostic;

/**
 * The kind of diagnostic information possible.
 *
 * Protobuf type <code>google.api.servicemanagement.v1.Diagnostic.Kind</code>
 */
class Kind
{
    /**
     * Warnings and errors
     *
     * Generated from protobuf enum <code>WARNING = 0;</code>
     */
    const WARNING = 0;
    /**
     * Only errors
     *
     * Generated from protobuf enum <code>ERROR = 1;</code>
     */
    const ERROR = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Kind::class, \Google\Cloud\ServiceManagement\V1\Diagnostic_Kind::class);
