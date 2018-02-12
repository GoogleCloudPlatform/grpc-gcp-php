<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/references.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.SearchReferencesRequest</code>
 */
class SearchReferencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, return references for which the
     * [md5checksum][google.genomics.v1.Reference.md5checksum] matches exactly.
     *
     * Generated from protobuf field <code>repeated string md5checksums = 1;</code>
     */
    private $md5checksums;
    /**
     * If present, return references for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.Reference.source_accessions] match
     * any of these strings. Accession numbers typically have a main number and a
     * version, for example `GCF_000001405.26`.
     *
     * Generated from protobuf field <code>repeated string accessions = 2;</code>
     */
    private $accessions;
    /**
     * If present, return only references which belong to this reference set.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     */
    private $reference_set_id = '';
    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Google\Genomics\V1\References::initOnce();
        parent::__construct();
    }

    /**
     * If present, return references for which the
     * [md5checksum][google.genomics.v1.Reference.md5checksum] matches exactly.
     *
     * Generated from protobuf field <code>repeated string md5checksums = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMd5Checksums()
    {
        return $this->md5checksums;
    }

    /**
     * If present, return references for which the
     * [md5checksum][google.genomics.v1.Reference.md5checksum] matches exactly.
     *
     * Generated from protobuf field <code>repeated string md5checksums = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMd5Checksums($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->md5checksums = $arr;

        return $this;
    }

    /**
     * If present, return references for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.Reference.source_accessions] match
     * any of these strings. Accession numbers typically have a main number and a
     * version, for example `GCF_000001405.26`.
     *
     * Generated from protobuf field <code>repeated string accessions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessions()
    {
        return $this->accessions;
    }

    /**
     * If present, return references for which a prefix of any of
     * [sourceAccessions][google.genomics.v1.Reference.source_accessions] match
     * any of these strings. Accession numbers typically have a main number and a
     * version, for example `GCF_000001405.26`.
     *
     * Generated from protobuf field <code>repeated string accessions = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->accessions = $arr;

        return $this;
    }

    /**
     * If present, return only references which belong to this reference set.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     * @return string
     */
    public function getReferenceSetId()
    {
        return $this->reference_set_id;
    }

    /**
     * If present, return only references which belong to this reference set.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_set_id = $var;

        return $this;
    }

    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 1024. The maximum value is 4096.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

