<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container message for hashes of byte content of files, used in
 * SourceProvenance messages to verify integrity of source input to the build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.FileHashes</code>
 */
class FileHashes extends \Google\Protobuf\Internal\Message
{
    /**
     * Collection of file hashes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Hash file_hash = 1;</code>
     */
    private $file_hash;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Cloudbuild\V1\Hash[]|\Google\Protobuf\Internal\RepeatedField $file_hash
     *           Collection of file hashes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Collection of file hashes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Hash file_hash = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileHash()
    {
        return $this->file_hash;
    }

    /**
     * Collection of file hashes.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Hash file_hash = 1;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Hash[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileHash($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\Hash::class);
        $this->file_hash = $arr;

        return $this;
    }

}
