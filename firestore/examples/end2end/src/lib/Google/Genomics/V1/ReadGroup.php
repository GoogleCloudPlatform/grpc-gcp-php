<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/readgroup.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A read group is all the data that's processed the same way by the sequencer.
 *
 * Generated from protobuf message <code>google.genomics.v1.ReadGroup</code>
 */
class ReadGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The dataset to which this read group belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     */
    private $dataset_id = '';
    /**
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * A free-form text description of this read group.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    private $description = '';
    /**
     * A client-supplied sample identifier for the reads in this read group.
     *
     * Generated from protobuf field <code>string sample_id = 5;</code>
     */
    private $sample_id = '';
    /**
     * The experiment used to generate this read group.
     *
     * Generated from protobuf field <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     */
    private $experiment = null;
    /**
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     *
     * Generated from protobuf field <code>int32 predicted_insert_size = 7;</code>
     */
    private $predicted_insert_size = 0;
    /**
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     */
    private $programs;
    /**
     * The reference set the reads in this read group are aligned to.
     *
     * Generated from protobuf field <code>string reference_set_id = 11;</code>
     */
    private $reference_set_id = '';
    /**
     * A map of additional read group information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 12;</code>
     */
    private $info;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\Readgroup::initOnce();
        parent::__construct();
    }

    /**
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The server-generated read group ID, unique for all read groups.
     * Note: This is different than the &#64;RG ID field in the SAM spec. For that
     * value, see [name][google.genomics.v1.ReadGroup.name].
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
     * The dataset to which this read group belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset to which this read group belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The read group name. This corresponds to the &#64;RG ID field in the SAM spec.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A free-form text description of this read group.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free-form text description of this read group.
     *
     * Generated from protobuf field <code>string description = 4;</code>
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
     * A client-supplied sample identifier for the reads in this read group.
     *
     * Generated from protobuf field <code>string sample_id = 5;</code>
     * @return string
     */
    public function getSampleId()
    {
        return $this->sample_id;
    }

    /**
     * A client-supplied sample identifier for the reads in this read group.
     *
     * Generated from protobuf field <code>string sample_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSampleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sample_id = $var;

        return $this;
    }

    /**
     * The experiment used to generate this read group.
     *
     * Generated from protobuf field <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     * @return \Google\Genomics\V1\ReadGroup_Experiment
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * The experiment used to generate this read group.
     *
     * Generated from protobuf field <code>.google.genomics.v1.ReadGroup.Experiment experiment = 6;</code>
     * @param \Google\Genomics\V1\ReadGroup_Experiment $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\ReadGroup_Experiment::class);
        $this->experiment = $var;

        return $this;
    }

    /**
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     *
     * Generated from protobuf field <code>int32 predicted_insert_size = 7;</code>
     * @return int
     */
    public function getPredictedInsertSize()
    {
        return $this->predicted_insert_size;
    }

    /**
     * The predicted insert size of this read group. The insert size is the length
     * the sequenced DNA fragment from end-to-end, not including the adapters.
     *
     * Generated from protobuf field <code>int32 predicted_insert_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPredictedInsertSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->predicted_insert_size = $var;

        return $this;
    }

    /**
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrograms()
    {
        return $this->programs;
    }

    /**
     * The programs used to generate this read group. Programs are always
     * identical for all read groups within a read group set. For this reason,
     * only the first read group in a returned set will have this field
     * populated.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup.Program programs = 10;</code>
     * @param \Google\Genomics\V1\ReadGroup_Program[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrograms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\ReadGroup_Program::class);
        $this->programs = $arr;

        return $this;
    }

    /**
     * The reference set the reads in this read group are aligned to.
     *
     * Generated from protobuf field <code>string reference_set_id = 11;</code>
     * @return string
     */
    public function getReferenceSetId()
    {
        return $this->reference_set_id;
    }

    /**
     * The reference set the reads in this read group are aligned to.
     *
     * Generated from protobuf field <code>string reference_set_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_set_id = $var;

        return $this;
    }

    /**
     * A map of additional read group information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * A map of additional read group information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->info = $arr;

        return $this;
    }

}

