<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AwsS3Data can be a data source, but not a data sink.
 * In an AwsS3Data, an object's name is the S3 object's key name.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AwsS3Data</code>
 */
class AwsS3Data extends \Google\Protobuf\Internal\Message
{
    /**
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    private $bucket_name = '';
    /**
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     */
    private $aws_access_key = null;

    public function __construct() {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct();
    }

    /**
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * S3 Bucket name (see
     * [Creating a bucket](http://docs.aws.amazon.com/AmazonS3/latest/dev/create-bucket-get-location-example.html)).
     * Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AwsAccessKey
     */
    public function getAwsAccessKey()
    {
        return $this->aws_access_key;
    }

    /**
     * AWS access key used to sign the API requests to the AWS S3 bucket.
     * Permissions on the bucket must be granted to the access ID of the
     * AWS access key.
     * Required.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsAccessKey aws_access_key = 2;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AwsAccessKey $var
     * @return $this
     */
    public function setAwsAccessKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AwsAccessKey::class);
        $this->aws_access_key = $var;

        return $this;
    }

}

