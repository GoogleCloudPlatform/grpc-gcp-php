<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1\ImportVariantsRequest;

/**
 * Protobuf type <code>google.genomics.v1.ImportVariantsRequest.Format</code>
 */
class Format
{
    /**
     * Generated from protobuf enum <code>FORMAT_UNSPECIFIED = 0;</code>
     */
    const FORMAT_UNSPECIFIED = 0;
    /**
     * VCF (Variant Call Format). The VCF files may be gzip compressed. gVCF is
     * also supported.
     *
     * Generated from protobuf enum <code>FORMAT_VCF = 1;</code>
     */
    const FORMAT_VCF = 1;
    /**
     * Complete Genomics masterVarBeta format. The masterVarBeta files may
     * be bzip2 compressed.
     *
     * Generated from protobuf enum <code>FORMAT_COMPLETE_GENOMICS = 2;</code>
     */
    const FORMAT_COMPLETE_GENOMICS = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Format::class, \Google\Genomics\V1\ImportVariantsRequest_Format::class);
