<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.VariantAnnotation.ClinicalCondition</code>
 */
class VariantAnnotation_ClinicalCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * A set of names for the condition.
     *
     * Generated from protobuf field <code>repeated string names = 1;</code>
     */
    private $names;
    /**
     * The set of external IDs for this condition.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ExternalId external_ids = 2;</code>
     */
    private $external_ids;
    /**
     * The MedGen concept id associated with this gene.
     * Search for these IDs at http://www.ncbi.nlm.nih.gov/medgen/
     *
     * Generated from protobuf field <code>string concept_id = 3;</code>
     */
    private $concept_id = '';
    /**
     * The OMIM id for this condition.
     * Search for these IDs at http://omim.org/
     *
     * Generated from protobuf field <code>string omim_id = 4;</code>
     */
    private $omim_id = '';

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct();
    }

    /**
     * A set of names for the condition.
     *
     * Generated from protobuf field <code>repeated string names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * A set of names for the condition.
     *
     * Generated from protobuf field <code>repeated string names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

    /**
     * The set of external IDs for this condition.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ExternalId external_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExternalIds()
    {
        return $this->external_ids;
    }

    /**
     * The set of external IDs for this condition.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ExternalId external_ids = 2;</code>
     * @param \Google\Genomics\V1\ExternalId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExternalIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\ExternalId::class);
        $this->external_ids = $arr;

        return $this;
    }

    /**
     * The MedGen concept id associated with this gene.
     * Search for these IDs at http://www.ncbi.nlm.nih.gov/medgen/
     *
     * Generated from protobuf field <code>string concept_id = 3;</code>
     * @return string
     */
    public function getConceptId()
    {
        return $this->concept_id;
    }

    /**
     * The MedGen concept id associated with this gene.
     * Search for these IDs at http://www.ncbi.nlm.nih.gov/medgen/
     *
     * Generated from protobuf field <code>string concept_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConceptId($var)
    {
        GPBUtil::checkString($var, True);
        $this->concept_id = $var;

        return $this;
    }

    /**
     * The OMIM id for this condition.
     * Search for these IDs at http://omim.org/
     *
     * Generated from protobuf field <code>string omim_id = 4;</code>
     * @return string
     */
    public function getOmimId()
    {
        return $this->omim_id;
    }

    /**
     * The OMIM id for this condition.
     * Search for these IDs at http://omim.org/
     *
     * Generated from protobuf field <code>string omim_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOmimId($var)
    {
        GPBUtil::checkString($var, True);
        $this->omim_id = $var;

        return $this;
    }

}

