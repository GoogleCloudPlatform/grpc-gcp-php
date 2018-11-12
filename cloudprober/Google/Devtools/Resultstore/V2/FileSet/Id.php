<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/file_set.proto

namespace Google\Devtools\Resultstore\V2\FileSet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The resource ID components that identify the FileSet.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.FileSet.Id</code>
 */
class Id extends \Google\Protobuf\Internal\Message
{
    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     */
    private $invocation_id = '';
    /**
     * The FileSet ID.
     *
     * Generated from protobuf field <code>string file_set_id = 2;</code>
     */
    private $file_set_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $invocation_id
     *           The Invocation ID.
     *     @type string $file_set_id
     *           The FileSet ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\FileSet::initOnce();
        parent::__construct($data);
    }

    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @return string
     */
    public function getInvocationId()
    {
        return $this->invocation_id;
    }

    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->invocation_id = $var;

        return $this;
    }

    /**
     * The FileSet ID.
     *
     * Generated from protobuf field <code>string file_set_id = 2;</code>
     * @return string
     */
    public function getFileSetId()
    {
        return $this->file_set_id;
    }

    /**
     * The FileSet ID.
     *
     * Generated from protobuf field <code>string file_set_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_set_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Id::class, \Google\Devtools\Resultstore\V2\FileSet_Id::class);
