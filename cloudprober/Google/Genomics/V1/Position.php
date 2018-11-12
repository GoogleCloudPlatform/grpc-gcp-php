<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/position.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An abstraction for referring to a genomic position, in relation to some
 * already known reference. For now, represents a genomic position as a
 * reference name, a base number on that reference (0-based), and a
 * determination of forward or reverse strand.
 *
 * Generated from protobuf message <code>google.genomics.v1.Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the reference in whatever reference set is being used.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     */
    private $reference_name = '';
    /**
     * The 0-based offset from the start of the forward strand for that reference.
     *
     * Generated from protobuf field <code>int64 position = 2;</code>
     */
    private $position = 0;
    /**
     * Whether this position is on the reverse strand, as opposed to the forward
     * strand.
     *
     * Generated from protobuf field <code>bool reverse_strand = 3;</code>
     */
    private $reverse_strand = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference_name
     *           The name of the reference in whatever reference set is being used.
     *     @type int|string $position
     *           The 0-based offset from the start of the forward strand for that reference.
     *     @type bool $reverse_strand
     *           Whether this position is on the reverse strand, as opposed to the forward
     *           strand.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Position::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the reference in whatever reference set is being used.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     * @return string
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * The name of the reference in whatever reference set is being used.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;

        return $this;
    }

    /**
     * The 0-based offset from the start of the forward strand for that reference.
     *
     * Generated from protobuf field <code>int64 position = 2;</code>
     * @return int|string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * The 0-based offset from the start of the forward strand for that reference.
     *
     * Generated from protobuf field <code>int64 position = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->position = $var;

        return $this;
    }

    /**
     * Whether this position is on the reverse strand, as opposed to the forward
     * strand.
     *
     * Generated from protobuf field <code>bool reverse_strand = 3;</code>
     * @return bool
     */
    public function getReverseStrand()
    {
        return $this->reverse_strand;
    }

    /**
     * Whether this position is on the reverse strand, as opposed to the forward
     * strand.
     *
     * Generated from protobuf field <code>bool reverse_strand = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReverseStrand($var)
    {
        GPBUtil::checkBool($var);
        $this->reverse_strand = $var;

        return $this;
    }

}
