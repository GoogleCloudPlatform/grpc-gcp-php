<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session_entity_type.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [SessionEntityTypes.DeleteSessionEntityType][google.cloud.dialogflow.v2beta1.SessionEntityTypes.DeleteSessionEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.DeleteSessionEntityTypeRequest</code>
 */
class DeleteSessionEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the entity type to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\SessionEntityType::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the entity type to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the entity type to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

