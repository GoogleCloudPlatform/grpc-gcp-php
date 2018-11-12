<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User-provided metadata for a table.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.TableInfo</code>
 */
class TableInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A short name for the table, such as`"Analytics Data - Jan 2011"`.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     */
    private $friendly_name = '';
    /**
     * A long description, perhaps several paragraphs,
     * describing the table contents in detail.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $friendly_name
     *           A short name for the table, such as`"Analytics Data - Jan 2011"`.
     *     @type string $description
     *           A long description, perhaps several paragraphs,
     *           describing the table contents in detail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * A short name for the table, such as`"Analytics Data - Jan 2011"`.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendly_name;
    }

    /**
     * A short name for the table, such as`"Analytics Data - Jan 2011"`.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendlyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->friendly_name = $var;

        return $this;
    }

    /**
     * A long description, perhaps several paragraphs,
     * describing the table contents in detail.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A long description, perhaps several paragraphs,
     * describing the table contents in detail.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}
