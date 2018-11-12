<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The read search request.
 *
 * Generated from protobuf message <code>google.genomics.v1.SearchReadsRequest</code>
 */
class SearchReadsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_set_ids = 1;</code>
     */
    private $read_group_set_ids;
    /**
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_ids = 5;</code>
     */
    private $read_group_ids;
    /**
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     *
     * Generated from protobuf field <code>string reference_name = 7;</code>
     */
    private $reference_name = '';
    /**
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 start = 8;</code>
     */
    private $start = 0;
    /**
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 end = 9;</code>
     */
    private $end = 0;
    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 256. The maximum value is 2048.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $read_group_set_ids
     *           The IDs of the read groups sets within which to search for reads. All
     *           specified read group sets must be aligned against a common set of reference
     *           sequences; this defines the genomic coordinates for the query. Must specify
     *           one of `readGroupSetIds` or `readGroupIds`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $read_group_ids
     *           The IDs of the read groups within which to search for reads. All specified
     *           read groups must belong to the same read group sets. Must specify one of
     *           `readGroupSetIds` or `readGroupIds`.
     *     @type string $reference_name
     *           The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     *           `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     *           and unmapped) are returned.
     *     @type int|string $start
     *           The start position of the range on the reference, 0-based inclusive. If
     *           specified, `referenceName` must also be specified.
     *     @type int|string $end
     *           The end position of the range on the reference, 0-based exclusive. If
     *           specified, `referenceName` must also be specified.
     *     @type string $page_token
     *           The continuation token, which is used to page through large result sets.
     *           To get the next page of results, set this parameter to the value of
     *           `nextPageToken` from the previous response.
     *     @type int $page_size
     *           The maximum number of results to return in a single page. If unspecified,
     *           defaults to 256. The maximum value is 2048.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct($data);
    }

    /**
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_set_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReadGroupSetIds()
    {
        return $this->read_group_set_ids;
    }

    /**
     * The IDs of the read groups sets within which to search for reads. All
     * specified read group sets must be aligned against a common set of reference
     * sequences; this defines the genomic coordinates for the query. Must specify
     * one of `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_set_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReadGroupSetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->read_group_set_ids = $arr;

        return $this;
    }

    /**
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReadGroupIds()
    {
        return $this->read_group_ids;
    }

    /**
     * The IDs of the read groups within which to search for reads. All specified
     * read groups must belong to the same read group sets. Must specify one of
     * `readGroupSetIds` or `readGroupIds`.
     *
     * Generated from protobuf field <code>repeated string read_group_ids = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReadGroupIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->read_group_ids = $arr;

        return $this;
    }

    /**
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     *
     * Generated from protobuf field <code>string reference_name = 7;</code>
     * @return string
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * The reference sequence name, for example `chr1`, `1`, or `chrX`. If set to
     * `*`, only unmapped reads are returned. If unspecified, all reads (mapped
     * and unmapped) are returned.
     *
     * Generated from protobuf field <code>string reference_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;

        return $this;
    }

    /**
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 start = 8;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * The start position of the range on the reference, 0-based inclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 start = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 end = 9;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * The end position of the range on the reference, 0-based exclusive. If
     * specified, `referenceName` must also be specified.
     *
     * Generated from protobuf field <code>int64 end = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * defaults to 256. The maximum value is 2048.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single page. If unspecified,
     * defaults to 256. The maximum value is 2048.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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
