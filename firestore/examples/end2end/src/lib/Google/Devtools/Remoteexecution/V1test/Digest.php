<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A content digest. A digest for a given blob consists of the size of the blob
 * and its hash. The hash algorithm to use is defined by the server, but servers
 * SHOULD use SHA-256.
 * The size is considered to be an integral part of the digest and cannot be
 * separated. That is, even if the `hash` field is correctly specified but
 * `size_bytes` is not, the server MUST reject the request.
 * The reason for including the size in the digest is as follows: in a great
 * many cases, the server needs to know the size of the blob it is about to work
 * with prior to starting an operation with it, such as flattening Merkle tree
 * structures or streaming it to a worker. Technically, the server could
 * implement a separate metadata store, but this results in a significantly more
 * complicated implementation as opposed to having the client specify the size
 * up-front (or storing the size along with the digest in every message where
 * digests are embedded). This does mean that the API leaks some implementation
 * details of (what we consider to be) a reasonable server implementation, but
 * we consider this to be a worthwhile tradeoff.
 * When a `Digest` is used to refer to a proto message, it always refers to the
 * message in binary encoded form. To ensure consistent hashing, clients and
 * servers MUST ensure that they serialize messages according to the following
 * rules, even if there are alternate valid encodings for the same message.
 * - Fields are serialized in tag order.
 * - There are no unknown fields.
 * - There are no duplicate fields.
 * - Fields are serialized according to the default semantics for their type.
 * Most protocol buffer implementations will always follow these rules when
 * serializing, but care should be taken to avoid shortcuts. For instance,
 * concatenating two messages to merge them may produce duplicate fields.
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.Digest</code>
 */
class Digest extends \Google\Protobuf\Internal\Message
{
    /**
     * The hash. In the case of SHA-256, it will always be a lowercase hex string
     * exactly 64 characters long.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     */
    private $hash = '';
    /**
     * The size of the blob, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2;</code>
     */
    private $size_bytes = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct();
    }

    /**
     * The hash. In the case of SHA-256, it will always be a lowercase hex string
     * exactly 64 characters long.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The hash. In the case of SHA-256, it will always be a lowercase hex string
     * exactly 64 characters long.
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * The size of the blob, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2;</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * The size of the blob, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

}

