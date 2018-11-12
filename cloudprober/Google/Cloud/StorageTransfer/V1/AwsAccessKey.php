<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AWS access key (see
 * [AWS Security Credentials](http://docs.aws.amazon.com/general/latest/gr/aws-security-credentials.html)).
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AwsAccessKey</code>
 */
class AwsAccessKey extends \Google\Protobuf\Internal\Message
{
    /**
     * AWS access key ID.
     * Required.
     *
     * Generated from protobuf field <code>string access_key_id = 1;</code>
     */
    private $access_key_id = '';
    /**
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     *
     * Generated from protobuf field <code>string secret_access_key = 2;</code>
     */
    private $secret_access_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $access_key_id
     *           AWS access key ID.
     *           Required.
     *     @type string $secret_access_key
     *           AWS secret access key. This field is not returned in RPC responses.
     *           Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * AWS access key ID.
     * Required.
     *
     * Generated from protobuf field <code>string access_key_id = 1;</code>
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->access_key_id;
    }

    /**
     * AWS access key ID.
     * Required.
     *
     * Generated from protobuf field <code>string access_key_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_key_id = $var;

        return $this;
    }

    /**
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     *
     * Generated from protobuf field <code>string secret_access_key = 2;</code>
     * @return string
     */
    public function getSecretAccessKey()
    {
        return $this->secret_access_key;
    }

    /**
     * AWS secret access key. This field is not returned in RPC responses.
     * Required.
     *
     * Generated from protobuf field <code>string secret_access_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretAccessKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_access_key = $var;

        return $this;
    }

}
