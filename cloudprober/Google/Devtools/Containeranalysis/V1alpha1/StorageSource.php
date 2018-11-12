<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/provenance.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StorageSource describes the location of the source in an archive file in
 * Google Cloud Storage.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.StorageSource</code>
 */
class StorageSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Google Cloud Storage bucket containing source (see [Bucket Name
     * Requirements]
     * (https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     */
    private $bucket = '';
    /**
     * Google Cloud Storage object containing source.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     */
    private $object = '';
    /**
     * Google Cloud Storage generation for the object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     */
    private $generation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Google Cloud Storage bucket containing source (see [Bucket Name
     *           Requirements]
     *           (https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *     @type string $object
     *           Google Cloud Storage object containing source.
     *     @type int|string $generation
     *           Google Cloud Storage generation for the object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Provenance::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Cloud Storage bucket containing source (see [Bucket Name
     * Requirements]
     * (https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Google Cloud Storage bucket containing source (see [Bucket Name
     * Requirements]
     * (https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *
     * Generated from protobuf field <code>string bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Google Cloud Storage object containing source.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Google Cloud Storage object containing source.
     *
     * Generated from protobuf field <code>string object = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;

        return $this;
    }

    /**
     * Google Cloud Storage generation for the object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Google Cloud Storage generation for the object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

}
