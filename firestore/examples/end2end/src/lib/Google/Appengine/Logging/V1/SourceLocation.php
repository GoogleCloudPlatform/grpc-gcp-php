<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/logging/v1/request_log.proto

namespace Google\Appengine\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a location in a source code file.
 *
 * Generated from protobuf message <code>google.appengine.logging.v1.SourceLocation</code>
 */
class SourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Source file name. Depending on the runtime environment, this might be a
     * simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1;</code>
     */
    private $file = '';
    /**
     * Line within the source file.
     *
     * Generated from protobuf field <code>int64 line = 2;</code>
     */
    private $line = 0;
    /**
     * Human-readable name of the function or method being invoked, with optional
     * context such as the class or package name. This information is used in
     * contexts such as the logs viewer, where a file and line number are less
     * meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function_name = 3;</code>
     */
    private $function_name = '';

    public function __construct() {
        \GPBMetadata\Google\Appengine\Logging\V1\RequestLog::initOnce();
        parent::__construct();
    }

    /**
     * Source file name. Depending on the runtime environment, this might be a
     * simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1;</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Source file name. Depending on the runtime environment, this might be a
     * simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

    /**
     * Line within the source file.
     *
     * Generated from protobuf field <code>int64 line = 2;</code>
     * @return int|string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Line within the source file.
     *
     * Generated from protobuf field <code>int64 line = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt64($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Human-readable name of the function or method being invoked, with optional
     * context such as the class or package name. This information is used in
     * contexts such as the logs viewer, where a file and line number are less
     * meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function_name = 3;</code>
     * @return string
     */
    public function getFunctionName()
    {
        return $this->function_name;
    }

    /**
     * Human-readable name of the function or method being invoked, with optional
     * context such as the class or package name. This information is used in
     * contexts such as the logs viewer, where a file and line number are less
     * meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_name = $var;

        return $this;
    }

}

