<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1\JobConfiguration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a load job, which loads data from an external source via
 * the  import pipeline.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.JobConfiguration.Load</code>
 */
class Load extends \Google\Protobuf\Internal\Message
{
    /**
     * URIs for the data to be imported. Only Google Cloud Storage URIs are
     * supported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 1;</code>
     */
    private $source_uris;
    /**
     * The table schema in JSON format representation of a TableSchema.
     *
     * Generated from protobuf field <code>string schema_json = 6;</code>
     */
    private $schema_json = '';
    /**
     * The table where the imported data is written.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.TableName destination_table = 3;</code>
     */
    private $destination_table = null;
    /**
     * Describes when a job is allowed to create a table:
     * `CREATE_IF_NEEDED`, `CREATE_NEVER`.
     *
     * Generated from protobuf field <code>string create_disposition = 4;</code>
     */
    private $create_disposition = '';
    /**
     * Describes how writes affect existing tables:
     * `WRITE_TRUNCATE`, `WRITE_APPEND`, `WRITE_EMPTY`.
     *
     * Generated from protobuf field <code>string write_disposition = 5;</code>
     */
    private $write_disposition = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $source_uris
     *           URIs for the data to be imported. Only Google Cloud Storage URIs are
     *           supported.
     *     @type string $schema_json
     *           The table schema in JSON format representation of a TableSchema.
     *     @type \Google\Cloud\Bigquery\Logging\V1\TableName $destination_table
     *           The table where the imported data is written.
     *     @type string $create_disposition
     *           Describes when a job is allowed to create a table:
     *           `CREATE_IF_NEEDED`, `CREATE_NEVER`.
     *     @type string $write_disposition
     *           Describes how writes affect existing tables:
     *           `WRITE_TRUNCATE`, `WRITE_APPEND`, `WRITE_EMPTY`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * URIs for the data to be imported. Only Google Cloud Storage URIs are
     * supported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceUris()
    {
        return $this->source_uris;
    }

    /**
     * URIs for the data to be imported. Only Google Cloud Storage URIs are
     * supported.
     *
     * Generated from protobuf field <code>repeated string source_uris = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->source_uris = $arr;

        return $this;
    }

    /**
     * The table schema in JSON format representation of a TableSchema.
     *
     * Generated from protobuf field <code>string schema_json = 6;</code>
     * @return string
     */
    public function getSchemaJson()
    {
        return $this->schema_json;
    }

    /**
     * The table schema in JSON format representation of a TableSchema.
     *
     * Generated from protobuf field <code>string schema_json = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_json = $var;

        return $this;
    }

    /**
     * The table where the imported data is written.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.TableName destination_table = 3;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\TableName
     */
    public function getDestinationTable()
    {
        return $this->destination_table;
    }

    /**
     * The table where the imported data is written.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.TableName destination_table = 3;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\TableName $var
     * @return $this
     */
    public function setDestinationTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\TableName::class);
        $this->destination_table = $var;

        return $this;
    }

    /**
     * Describes when a job is allowed to create a table:
     * `CREATE_IF_NEEDED`, `CREATE_NEVER`.
     *
     * Generated from protobuf field <code>string create_disposition = 4;</code>
     * @return string
     */
    public function getCreateDisposition()
    {
        return $this->create_disposition;
    }

    /**
     * Describes when a job is allowed to create a table:
     * `CREATE_IF_NEEDED`, `CREATE_NEVER`.
     *
     * Generated from protobuf field <code>string create_disposition = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateDisposition($var)
    {
        GPBUtil::checkString($var, True);
        $this->create_disposition = $var;

        return $this;
    }

    /**
     * Describes how writes affect existing tables:
     * `WRITE_TRUNCATE`, `WRITE_APPEND`, `WRITE_EMPTY`.
     *
     * Generated from protobuf field <code>string write_disposition = 5;</code>
     * @return string
     */
    public function getWriteDisposition()
    {
        return $this->write_disposition;
    }

    /**
     * Describes how writes affect existing tables:
     * `WRITE_TRUNCATE`, `WRITE_APPEND`, `WRITE_EMPTY`.
     *
     * Generated from protobuf field <code>string write_disposition = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setWriteDisposition($var)
    {
        GPBUtil::checkString($var, True);
        $this->write_disposition = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Load::class, \Google\Cloud\Bigquery\Logging\V1\JobConfiguration_Load::class);
