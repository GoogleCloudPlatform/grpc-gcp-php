<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BigQuery dataset information.
 * See the [Dataset](/bigquery/docs/reference/v2/datasets) API resource
 * for more details on individual fields.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.Dataset</code>
 */
class Dataset extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetName dataset_name = 1;</code>
     */
    private $dataset_name = null;
    /**
     * User-provided metadata for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetInfo info = 2;</code>
     */
    private $info = null;
    /**
     * The time the dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    private $create_time = null;
    /**
     * The time the dataset was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     */
    private $update_time = null;
    /**
     * The access control list for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.BigQueryAcl acl = 6;</code>
     */
    private $acl = null;
    /**
     * If this field is present, each table that does not specify an
     * expiration time is assigned an expiration time by adding this
     * duration to the table's `createTime`.  If this field is empty,
     * there is no default table expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration default_table_expire_duration = 8;</code>
     */
    private $default_table_expire_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Logging\V1\DatasetName $dataset_name
     *           The name of the dataset.
     *     @type \Google\Cloud\Bigquery\Logging\V1\DatasetInfo $info
     *           User-provided metadata for the dataset.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the dataset was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The time the dataset was last modified.
     *     @type \Google\Cloud\Bigquery\Logging\V1\BigQueryAcl $acl
     *           The access control list for the dataset.
     *     @type \Google\Protobuf\Duration $default_table_expire_duration
     *           If this field is present, each table that does not specify an
     *           expiration time is assigned an expiration time by adding this
     *           duration to the table's `createTime`.  If this field is empty,
     *           there is no default table expiration time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetName dataset_name = 1;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\DatasetName
     */
    public function getDatasetName()
    {
        return $this->dataset_name;
    }

    /**
     * The name of the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetName dataset_name = 1;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\DatasetName $var
     * @return $this
     */
    public function setDatasetName($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\DatasetName::class);
        $this->dataset_name = $var;

        return $this;
    }

    /**
     * User-provided metadata for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetInfo info = 2;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\DatasetInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * User-provided metadata for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.DatasetInfo info = 2;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\DatasetInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\DatasetInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * The time the dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * The time the dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The time the dataset was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * The time the dataset was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The access control list for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.BigQueryAcl acl = 6;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\BigQueryAcl
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * The access control list for the dataset.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.BigQueryAcl acl = 6;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\BigQueryAcl $var
     * @return $this
     */
    public function setAcl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\BigQueryAcl::class);
        $this->acl = $var;

        return $this;
    }

    /**
     * If this field is present, each table that does not specify an
     * expiration time is assigned an expiration time by adding this
     * duration to the table's `createTime`.  If this field is empty,
     * there is no default table expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration default_table_expire_duration = 8;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getDefaultTableExpireDuration()
    {
        return $this->default_table_expire_duration;
    }

    /**
     * If this field is present, each table that does not specify an
     * expiration time is assigned an expiration time by adding this
     * duration to the table's `createTime`.  If this field is empty,
     * there is no default table expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration default_table_expire_duration = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDefaultTableExpireDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->default_table_expire_duration = $var;

        return $this;
    }

}
