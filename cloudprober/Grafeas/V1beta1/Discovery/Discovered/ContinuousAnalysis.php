<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1beta1/discovery/discovery.proto

namespace Grafeas\V1beta1\Discovery\Discovered;

/**
 * Whether the resource is continuously analyzed.
 *
 * Protobuf type <code>grafeas.v1beta1.discovery.Discovered.ContinuousAnalysis</code>
 */
class ContinuousAnalysis
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>CONTINUOUS_ANALYSIS_UNSPECIFIED = 0;</code>
     */
    const CONTINUOUS_ANALYSIS_UNSPECIFIED = 0;
    /**
     * The resource is continuously analyzed.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The resource is ignored for continuous analysis.
     *
     * Generated from protobuf enum <code>INACTIVE = 2;</code>
     */
    const INACTIVE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContinuousAnalysis::class, \Grafeas\V1beta1\Discovery\Discovered_ContinuousAnalysis::class);
