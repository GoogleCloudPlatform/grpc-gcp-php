<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/target.proto

namespace Google\Devtools\Resultstore\V2;

/**
 * These correspond to the suffix of the rule name. Eg cc_test has type TEST.
 *
 * Protobuf type <code>google.devtools.resultstore.v2.TargetType</code>
 */
class TargetType
{
    /**
     * Unspecified by the build system.
     *
     * Generated from protobuf enum <code>TARGET_TYPE_UNSPECIFIED = 0;</code>
     */
    const TARGET_TYPE_UNSPECIFIED = 0;
    /**
     * An application e.g. ios_application.
     *
     * Generated from protobuf enum <code>APPLICATION = 1;</code>
     */
    const APPLICATION = 1;
    /**
     * A binary target e.g. cc_binary.
     *
     * Generated from protobuf enum <code>BINARY = 2;</code>
     */
    const BINARY = 2;
    /**
     * A library target e.g. java_library
     *
     * Generated from protobuf enum <code>LIBRARY = 3;</code>
     */
    const LIBRARY = 3;
    /**
     * A package
     *
     * Generated from protobuf enum <code>PACKAGE = 4;</code>
     */
    const PACKAGE = 4;
    /**
     * Any test target, in bazel that means a rule with a '_test' suffix.
     *
     * Generated from protobuf enum <code>TEST = 5;</code>
     */
    const TEST = 5;
}
