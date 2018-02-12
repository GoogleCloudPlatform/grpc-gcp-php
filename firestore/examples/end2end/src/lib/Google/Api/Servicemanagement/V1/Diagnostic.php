<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a diagnostic message (error or warning)
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.Diagnostic</code>
 */
class Diagnostic extends \Google\Protobuf\Internal\Message
{
    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     */
    private $kind = 0;
    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicemanagement\V1\Diagnostic_Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

