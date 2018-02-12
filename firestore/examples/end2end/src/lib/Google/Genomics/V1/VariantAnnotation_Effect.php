<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

/**
 * Protobuf enum <code>Google\Genomics\V1\VariantAnnotation\Effect</code>
 */
class VariantAnnotation_Effect
{
    /**
     * Generated from protobuf enum <code>EFFECT_UNSPECIFIED = 0;</code>
     */
    const EFFECT_UNSPECIFIED = 0;
    /**
     * `EFFECT_OTHER` should be used when no other Effect
     * will suffice.
     *
     * Generated from protobuf enum <code>EFFECT_OTHER = 1;</code>
     */
    const EFFECT_OTHER = 1;
    /**
     * `FRAMESHIFT` indicates a mutation in which the insertion or
     * deletion of nucleotides resulted in a frameshift change.
     *
     * Generated from protobuf enum <code>FRAMESHIFT = 2;</code>
     */
    const FRAMESHIFT = 2;
    /**
     * `FRAME_PRESERVING_INDEL` indicates a mutation in which a
     * multiple of three nucleotides has been inserted or deleted, resulting
     * in no change to the reading frame of the coding sequence.
     *
     * Generated from protobuf enum <code>FRAME_PRESERVING_INDEL = 3;</code>
     */
    const FRAME_PRESERVING_INDEL = 3;
    /**
     * `SYNONYMOUS_SNP` indicates a single nucleotide polymorphism
     * mutation that results in no amino acid change.
     *
     * Generated from protobuf enum <code>SYNONYMOUS_SNP = 4;</code>
     */
    const SYNONYMOUS_SNP = 4;
    /**
     * `NONSYNONYMOUS_SNP` indicates a single nucleotide
     * polymorphism mutation that results in an amino acid change.
     *
     * Generated from protobuf enum <code>NONSYNONYMOUS_SNP = 5;</code>
     */
    const NONSYNONYMOUS_SNP = 5;
    /**
     * `STOP_GAIN` indicates a mutation that leads to the creation
     * of a stop codon at the variant site. Frameshift mutations creating
     * downstream stop codons do not count as `STOP_GAIN`.
     *
     * Generated from protobuf enum <code>STOP_GAIN = 6;</code>
     */
    const STOP_GAIN = 6;
    /**
     * `STOP_LOSS` indicates a mutation that eliminates a
     * stop codon at the variant site.
     *
     * Generated from protobuf enum <code>STOP_LOSS = 7;</code>
     */
    const STOP_LOSS = 7;
    /**
     * `SPLICE_SITE_DISRUPTION` indicates that this variant is
     * found in a splice site for the associated transcript, and alters the
     * normal splicing pattern.
     *
     * Generated from protobuf enum <code>SPLICE_SITE_DISRUPTION = 8;</code>
     */
    const SPLICE_SITE_DISRUPTION = 8;
}

