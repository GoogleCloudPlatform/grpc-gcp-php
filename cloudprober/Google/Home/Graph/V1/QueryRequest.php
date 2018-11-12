<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/homegraph.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request type for Query call. This should be the same format as the AoG
 * action.devices.QUERY request
 * (https://developers.google.com/actions/smarthome/create-app#actiondevicesquery)
 * with the exception of the extra "agent_user_id" and no "intent" and
 * "customData" field.
 *
 * Generated from protobuf message <code>google.home.graph.v1.QueryRequest</code>
 */
class QueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Request ID used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * Required. Third-party user ID.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     */
    private $agent_user_id = '';
    /**
     * Required. Inputs containing third-party partner's device IDs for which to
     * get the device states.
     *
     * Generated from protobuf field <code>repeated .google.home.graph.v1.QueryRequestInput inputs = 3;</code>
     */
    private $inputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *           Request ID used for debugging.
     *     @type string $agent_user_id
     *           Required. Third-party user ID.
     *     @type \Google\Home\Graph\V1\QueryRequestInput[]|\Google\Protobuf\Internal\RepeatedField $inputs
     *           Required. Inputs containing third-party partner's device IDs for which to
     *           get the device states.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Graph\V1\Homegraph::initOnce();
        parent::__construct($data);
    }

    /**
     * Request ID used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Request ID used for debugging.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Required. Third-party user ID.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agent_user_id;
    }

    /**
     * Required. Third-party user ID.
     *
     * Generated from protobuf field <code>string agent_user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_user_id = $var;

        return $this;
    }

    /**
     * Required. Inputs containing third-party partner's device IDs for which to
     * get the device states.
     *
     * Generated from protobuf field <code>repeated .google.home.graph.v1.QueryRequestInput inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Required. Inputs containing third-party partner's device IDs for which to
     * get the device states.
     *
     * Generated from protobuf field <code>repeated .google.home.graph.v1.QueryRequestInput inputs = 3;</code>
     * @param \Google\Home\Graph\V1\QueryRequestInput[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Home\Graph\V1\QueryRequestInput::class);
        $this->inputs = $arr;

        return $this;
    }

}
