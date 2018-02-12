<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1beta1/model_service.proto

namespace Google\Cloud\Ml\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the GetModel method.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1beta1.GetModelRequest</code>
 */
class GetModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the model.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Ml\V1Beta1\ModelService::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the model.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the model.
     * Authorization: requires `Viewer` role on the parent project.
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

