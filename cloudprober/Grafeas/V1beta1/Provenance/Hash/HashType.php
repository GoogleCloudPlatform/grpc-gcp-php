<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1beta1/provenance/provenance.proto

namespace Grafeas\V1beta1\Provenance\Hash;

/**
 * Specifies the hash algorithm, if any.
 *
 * Protobuf type <code>grafeas.v1beta1.provenance.Hash.HashType</code>
 */
class HashType
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>HASH_TYPE_UNSPECIFIED = 0;</code>
     */
    const HASH_TYPE_UNSPECIFIED = 0;
    /**
     * A SHA-256 hash.
     *
     * Generated from protobuf enum <code>SHA256 = 1;</code>
     */
    const SHA256 = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HashType::class, \Grafeas\V1beta1\Provenance\Hash_HashType::class);
