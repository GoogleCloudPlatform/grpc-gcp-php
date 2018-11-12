<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/references.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference set is a set of references which typically comprise a reference
 * assembly for a species, such as `GRCh38` which is representative
 * of the human genome. A reference set defines a common coordinate space for
 * comparing reference-aligned experimental data. A reference set contains 1 or
 * more references.
 * For more genomics resource definitions, see [Fundamentals of Google
 * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
 *
 * Generated from protobuf message <code>google.genomics.v1.ReferenceSet</code>
 */
class ReferenceSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-generated reference set ID, unique across all reference sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The IDs of the reference objects that are part of this set.
     * `Reference.md5checksum` must be unique within this set.
     *
     * Generated from protobuf field <code>repeated string reference_ids = 2;</code>
     */
    private $reference_ids;
    /**
     * Order-independent MD5 checksum which identifies this reference set. The
     * checksum is computed by sorting all lower case hexidecimal string
     * `reference.md5checksum` (for all reference in this set) in
     * ascending lexicographic order, concatenating, and taking the MD5 of that
     * value. The resulting value is represented in lower case hexadecimal format.
     *
     * Generated from protobuf field <code>string md5checksum = 3;</code>
     */
    private $md5checksum = '';
    /**
     * ID from http://www.ncbi.nlm.nih.gov/taxonomy (for example, 9606 for human)
     * indicating the species which this reference set is intended to model. Note
     * that contained references may specify a different `ncbiTaxonId`, as
     * assemblies may contain reference sequences which do not belong to the
     * modeled species, for example EBV in a human reference genome.
     *
     * Generated from protobuf field <code>int32 ncbi_taxon_id = 4;</code>
     */
    private $ncbi_taxon_id = 0;
    /**
     * Free text description of this reference set.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Public id of this reference set, such as `GRCh37`.
     *
     * Generated from protobuf field <code>string assembly_id = 6;</code>
     */
    private $assembly_id = '';
    /**
     * The URI from which the references were obtained.
     *
     * Generated from protobuf field <code>string source_uri = 7;</code>
     */
    private $source_uri = '';
    /**
     * All known corresponding accession IDs in INSDC (GenBank/ENA/DDBJ) ideally
     * with a version number, for example `NC_000001.11`.
     *
     * Generated from protobuf field <code>repeated string source_accessions = 8;</code>
     */
    private $source_accessions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The server-generated reference set ID, unique across all reference sets.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $reference_ids
     *           The IDs of the reference objects that are part of this set.
     *           `Reference.md5checksum` must be unique within this set.
     *     @type string $md5checksum
     *           Order-independent MD5 checksum which identifies this reference set. The
     *           checksum is computed by sorting all lower case hexidecimal string
     *           `reference.md5checksum` (for all reference in this set) in
     *           ascending lexicographic order, concatenating, and taking the MD5 of that
     *           value. The resulting value is represented in lower case hexadecimal format.
     *     @type int $ncbi_taxon_id
     *           ID from http://www.ncbi.nlm.nih.gov/taxonomy (for example, 9606 for human)
     *           indicating the species which this reference set is intended to model. Note
     *           that contained references may specify a different `ncbiTaxonId`, as
     *           assemblies may contain reference sequences which do not belong to the
     *           modeled species, for example EBV in a human reference genome.
     *     @type string $description
     *           Free text description of this reference set.
     *     @type string $assembly_id
     *           Public id of this reference set, such as `GRCh37`.
     *     @type string $source_uri
     *           The URI from which the references were obtained.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $source_accessions
     *           All known corresponding accession IDs in INSDC (GenBank/ENA/DDBJ) ideally
     *           with a version number, for example `NC_000001.11`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\References::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-generated reference set ID, unique across all reference sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The server-generated reference set ID, unique across all reference sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The IDs of the reference objects that are part of this set.
     * `Reference.md5checksum` must be unique within this set.
     *
     * Generated from protobuf field <code>repeated string reference_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferenceIds()
    {
        return $this->reference_ids;
    }

    /**
     * The IDs of the reference objects that are part of this set.
     * `Reference.md5checksum` must be unique within this set.
     *
     * Generated from protobuf field <code>repeated string reference_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferenceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reference_ids = $arr;

        return $this;
    }

    /**
     * Order-independent MD5 checksum which identifies this reference set. The
     * checksum is computed by sorting all lower case hexidecimal string
     * `reference.md5checksum` (for all reference in this set) in
     * ascending lexicographic order, concatenating, and taking the MD5 of that
     * value. The resulting value is represented in lower case hexadecimal format.
     *
     * Generated from protobuf field <code>string md5checksum = 3;</code>
     * @return string
     */
    public function getMd5Checksum()
    {
        return $this->md5checksum;
    }

    /**
     * Order-independent MD5 checksum which identifies this reference set. The
     * checksum is computed by sorting all lower case hexidecimal string
     * `reference.md5checksum` (for all reference in this set) in
     * ascending lexicographic order, concatenating, and taking the MD5 of that
     * value. The resulting value is represented in lower case hexadecimal format.
     *
     * Generated from protobuf field <code>string md5checksum = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5Checksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->md5checksum = $var;

        return $this;
    }

    /**
     * ID from http://www.ncbi.nlm.nih.gov/taxonomy (for example, 9606 for human)
     * indicating the species which this reference set is intended to model. Note
     * that contained references may specify a different `ncbiTaxonId`, as
     * assemblies may contain reference sequences which do not belong to the
     * modeled species, for example EBV in a human reference genome.
     *
     * Generated from protobuf field <code>int32 ncbi_taxon_id = 4;</code>
     * @return int
     */
    public function getNcbiTaxonId()
    {
        return $this->ncbi_taxon_id;
    }

    /**
     * ID from http://www.ncbi.nlm.nih.gov/taxonomy (for example, 9606 for human)
     * indicating the species which this reference set is intended to model. Note
     * that contained references may specify a different `ncbiTaxonId`, as
     * assemblies may contain reference sequences which do not belong to the
     * modeled species, for example EBV in a human reference genome.
     *
     * Generated from protobuf field <code>int32 ncbi_taxon_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNcbiTaxonId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ncbi_taxon_id = $var;

        return $this;
    }

    /**
     * Free text description of this reference set.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Free text description of this reference set.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Public id of this reference set, such as `GRCh37`.
     *
     * Generated from protobuf field <code>string assembly_id = 6;</code>
     * @return string
     */
    public function getAssemblyId()
    {
        return $this->assembly_id;
    }

    /**
     * Public id of this reference set, such as `GRCh37`.
     *
     * Generated from protobuf field <code>string assembly_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAssemblyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->assembly_id = $var;

        return $this;
    }

    /**
     * The URI from which the references were obtained.
     *
     * Generated from protobuf field <code>string source_uri = 7;</code>
     * @return string
     */
    public function getSourceUri()
    {
        return $this->source_uri;
    }

    /**
     * The URI from which the references were obtained.
     *
     * Generated from protobuf field <code>string source_uri = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_uri = $var;

        return $this;
    }

    /**
     * All known corresponding accession IDs in INSDC (GenBank/ENA/DDBJ) ideally
     * with a version number, for example `NC_000001.11`.
     *
     * Generated from protobuf field <code>repeated string source_accessions = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceAccessions()
    {
        return $this->source_accessions;
    }

    /**
     * All known corresponding accession IDs in INSDC (GenBank/ENA/DDBJ) ideally
     * with a version number, for example `NC_000001.11`.
     *
     * Generated from protobuf field <code>repeated string source_accessions = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceAccessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->source_accessions = $arr;

        return $this;
    }

}
