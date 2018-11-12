<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/resultstore_file_download.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for GetFileTail
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.GetFileTailRequest</code>
 */
class GetFileTailRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * This corresponds to the uri field in the File message.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    private $uri = '';
    /**
     * The offset for the first byte to return in the read, relative to the end
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     */
    private $read_offset = 0;
    /**
     * The maximum number of `data` bytes the server is allowed to return. The
     * server will return bytes starting from the tail of the file.
     * A `read_limit` of zero indicates that there is no limit, and a negative
     * `read_limit` will cause an error.
     *
     * Generated from protobuf field <code>int64 read_limit = 3;</code>
     */
    private $read_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           This corresponds to the uri field in the File message.
     *     @type int|string $read_offset
     *           The offset for the first byte to return in the read, relative to the end
     *           of the resource.
     *           A `read_offset` that is negative or greater than the size of the resource
     *           will cause an `OUT_OF_RANGE` error.
     *     @type int|string $read_limit
     *           The maximum number of `data` bytes the server is allowed to return. The
     *           server will return bytes starting from the tail of the file.
     *           A `read_limit` of zero indicates that there is no limit, and a negative
     *           `read_limit` will cause an error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\ResultstoreFileDownload::initOnce();
        parent::__construct($data);
    }

    /**
     * This corresponds to the uri field in the File message.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * This corresponds to the uri field in the File message.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The offset for the first byte to return in the read, relative to the end
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     * @return int|string
     */
    public function getReadOffset()
    {
        return $this->read_offset;
    }

    /**
     * The offset for the first byte to return in the read, relative to the end
     * of the resource.
     * A `read_offset` that is negative or greater than the size of the resource
     * will cause an `OUT_OF_RANGE` error.
     *
     * Generated from protobuf field <code>int64 read_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReadOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_offset = $var;

        return $this;
    }

    /**
     * The maximum number of `data` bytes the server is allowed to return. The
     * server will return bytes starting from the tail of the file.
     * A `read_limit` of zero indicates that there is no limit, and a negative
     * `read_limit` will cause an error.
     *
     * Generated from protobuf field <code>int64 read_limit = 3;</code>
     * @return int|string
     */
    public function getReadLimit()
    {
        return $this->read_limit;
    }

    /**
     * The maximum number of `data` bytes the server is allowed to return. The
     * server will return bytes starting from the tail of the file.
     * A `read_limit` of zero indicates that there is no limit, and a negative
     * `read_limit` will cause an error.
     *
     * Generated from protobuf field <code>int64 read_limit = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReadLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->read_limit = $var;

        return $this;
    }

}
