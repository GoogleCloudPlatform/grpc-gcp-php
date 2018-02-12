<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bytestream/bytestream.proto

namespace Google\Bytestream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response object for ByteStream.Read.
 *
 * Generated from protobuf message <code>google.bytestream.ReadResponse</code>
 */
class ReadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
     * generate more data.
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     */
    private $data = '';

    public function __construct() {
        \GPBMetadata\Google\Bytestream\Bytestream::initOnce();
        parent::__construct();
    }

    /**
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
     * generate more data.
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A portion of the data for the resource. The service **may** leave `data`
     * empty for any given `ReadResponse`. This enables the service to inform the
     * client that the request is still live while it is running an operation to
     * generate more data.
     *
     * Generated from protobuf field <code>bytes data = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

