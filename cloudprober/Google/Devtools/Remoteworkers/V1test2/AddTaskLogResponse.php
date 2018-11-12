<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/tasks.proto

namespace Google\Devtools\Remoteworkers\V1test2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `AddTaskLog`.
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.AddTaskLogResponse</code>
 */
class AddTaskLogResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The handle for the new log, as would be returned in Task.logs.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     */
    private $handle = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $handle
     *           The handle for the new log, as would be returned in Task.logs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The handle for the new log, as would be returned in Task.logs.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * The handle for the new log, as would be returned in Task.logs.
     *
     * Generated from protobuf field <code>string handle = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHandle($var)
    {
        GPBUtil::checkString($var, True);
        $this->handle = $var;

        return $this;
    }

}
