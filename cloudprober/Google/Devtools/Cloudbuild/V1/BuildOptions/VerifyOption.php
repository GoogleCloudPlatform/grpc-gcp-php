<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1\BuildOptions;

/**
 * Specifies the manner in which the build should be verified, if at all.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildOptions.VerifyOption</code>
 */
class VerifyOption
{
    /**
     * Not a verifiable build. (default)
     *
     * Generated from protobuf enum <code>NOT_VERIFIED = 0;</code>
     */
    const NOT_VERIFIED = 0;
    /**
     * Verified build.
     *
     * Generated from protobuf enum <code>VERIFIED = 1;</code>
     */
    const VERIFIED = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VerifyOption::class, \Google\Devtools\Cloudbuild\V1\BuildOptions_VerifyOption::class);
