<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/coverage.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes branch coverage for a file
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.BranchCoverage</code>
 */
class BranchCoverage extends \Google\Protobuf\Internal\Message
{
    /**
     * The field branch_present denotes the lines containing at least one branch.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * A 1 denotes the line contains at least one branch.
     * A 0 denotes the line contains no branches.
     *
     * Generated from protobuf field <code>bytes branch_present = 1;</code>
     */
    private $branch_present = '';
    /**
     * Contains the number of branches present, only for the lines which have the
     * corresponding bit set in branch_present, in a relative order ignoring
     * lines which do not have any branches.
     *
     * Generated from protobuf field <code>repeated int32 branches_in_line = 2;</code>
     */
    private $branches_in_line;
    /**
     * As each branch can have any one of the following three states: not
     * executed, executed but not taken, executed and taken.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * i-th bit of the following two byte arrays are used to denote the above
     * mentioned states.
     * not executed: i-th bit of executed == 0 && i-th bit of taken == 0
     * executed but not taken: i-th bit of executed == 1 && i-th bit of taken == 0
     * executed and taken: i-th bit of executed == 1 && i-th bit of taken == 1
     *
     * Generated from protobuf field <code>bytes executed = 3;</code>
     */
    private $executed = '';
    /**
     * Described above.
     *
     * Generated from protobuf field <code>bytes taken = 4;</code>
     */
    private $taken = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $branch_present
     *           The field branch_present denotes the lines containing at least one branch.
     *           This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     *           number by 8 to get index into byte array. Mod line number by 8 to get bit
     *           number (0 = LSB, 7 = MSB).
     *           A 1 denotes the line contains at least one branch.
     *           A 0 denotes the line contains no branches.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $branches_in_line
     *           Contains the number of branches present, only for the lines which have the
     *           corresponding bit set in branch_present, in a relative order ignoring
     *           lines which do not have any branches.
     *     @type string $executed
     *           As each branch can have any one of the following three states: not
     *           executed, executed but not taken, executed and taken.
     *           This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     *           number by 8 to get index into byte array. Mod line number by 8 to get bit
     *           number (0 = LSB, 7 = MSB).
     *           i-th bit of the following two byte arrays are used to denote the above
     *           mentioned states.
     *           not executed: i-th bit of executed == 0 && i-th bit of taken == 0
     *           executed but not taken: i-th bit of executed == 1 && i-th bit of taken == 0
     *           executed and taken: i-th bit of executed == 1 && i-th bit of taken == 1
     *     @type string $taken
     *           Described above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Coverage::initOnce();
        parent::__construct($data);
    }

    /**
     * The field branch_present denotes the lines containing at least one branch.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * A 1 denotes the line contains at least one branch.
     * A 0 denotes the line contains no branches.
     *
     * Generated from protobuf field <code>bytes branch_present = 1;</code>
     * @return string
     */
    public function getBranchPresent()
    {
        return $this->branch_present;
    }

    /**
     * The field branch_present denotes the lines containing at least one branch.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * A 1 denotes the line contains at least one branch.
     * A 0 denotes the line contains no branches.
     *
     * Generated from protobuf field <code>bytes branch_present = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBranchPresent($var)
    {
        GPBUtil::checkString($var, False);
        $this->branch_present = $var;

        return $this;
    }

    /**
     * Contains the number of branches present, only for the lines which have the
     * corresponding bit set in branch_present, in a relative order ignoring
     * lines which do not have any branches.
     *
     * Generated from protobuf field <code>repeated int32 branches_in_line = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBranchesInLine()
    {
        return $this->branches_in_line;
    }

    /**
     * Contains the number of branches present, only for the lines which have the
     * corresponding bit set in branch_present, in a relative order ignoring
     * lines which do not have any branches.
     *
     * Generated from protobuf field <code>repeated int32 branches_in_line = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBranchesInLine($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->branches_in_line = $arr;

        return $this;
    }

    /**
     * As each branch can have any one of the following three states: not
     * executed, executed but not taken, executed and taken.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * i-th bit of the following two byte arrays are used to denote the above
     * mentioned states.
     * not executed: i-th bit of executed == 0 && i-th bit of taken == 0
     * executed but not taken: i-th bit of executed == 1 && i-th bit of taken == 0
     * executed and taken: i-th bit of executed == 1 && i-th bit of taken == 1
     *
     * Generated from protobuf field <code>bytes executed = 3;</code>
     * @return string
     */
    public function getExecuted()
    {
        return $this->executed;
    }

    /**
     * As each branch can have any one of the following three states: not
     * executed, executed but not taken, executed and taken.
     * This is a bitfield where i-th bit corresponds to the i-th line. Divide line
     * number by 8 to get index into byte array. Mod line number by 8 to get bit
     * number (0 = LSB, 7 = MSB).
     * i-th bit of the following two byte arrays are used to denote the above
     * mentioned states.
     * not executed: i-th bit of executed == 0 && i-th bit of taken == 0
     * executed but not taken: i-th bit of executed == 1 && i-th bit of taken == 0
     * executed and taken: i-th bit of executed == 1 && i-th bit of taken == 1
     *
     * Generated from protobuf field <code>bytes executed = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExecuted($var)
    {
        GPBUtil::checkString($var, False);
        $this->executed = $var;

        return $this;
    }

    /**
     * Described above.
     *
     * Generated from protobuf field <code>bytes taken = 4;</code>
     * @return string
     */
    public function getTaken()
    {
        return $this->taken;
    }

    /**
     * Described above.
     *
     * Generated from protobuf field <code>bytes taken = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTaken($var)
    {
        GPBUtil::checkString($var, False);
        $this->taken = $var;

        return $this;
    }

}
