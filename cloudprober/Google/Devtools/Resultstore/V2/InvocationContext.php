<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/invocation.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the invocation context which includes a display name and URL.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.InvocationContext</code>
 */
class InvocationContext extends \Google\Protobuf\Internal\Message
{
    /**
     * A human readable name for the context under which this Invocation was run.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * A URL pointing to a UI containing more information
     *
     * Generated from protobuf field <code>string url = 2;</code>
     */
    private $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           A human readable name for the context under which this Invocation was run.
     *     @type string $url
     *           A URL pointing to a UI containing more information
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Invocation::initOnce();
        parent::__construct($data);
    }

    /**
     * A human readable name for the context under which this Invocation was run.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A human readable name for the context under which this Invocation was run.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A URL pointing to a UI containing more information
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * A URL pointing to a UI containing more information
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}
