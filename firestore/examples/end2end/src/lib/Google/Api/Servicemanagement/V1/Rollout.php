<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Api\Servicemanagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rollout resource that defines how service configuration versions are pushed
 * to control plane systems. Typically, you create a new version of the
 * service config, and then create a Rollout to push the service config.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.Rollout</code>
 */
class Rollout extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional unique identifier of this Rollout. Only lower case letters, digits
     *  and '-' are allowed.
     * If not specified by client, the server will generate one. The generated id
     * will have the form of <date><revision number>, where "date" is the create
     * date in ISO 8601 format.  "revision number" is a monotonically increasing
     * positive number that is reset every day for each service.
     * An example of the generated rollout_id is '2016-02-16r1'
     *
     * Generated from protobuf field <code>string rollout_id = 1;</code>
     */
    private $rollout_id = '';
    /**
     * Creation time of the rollout. Readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * The user who created the Rollout. Readonly.
     *
     * Generated from protobuf field <code>string created_by = 3;</code>
     */
    private $created_by = '';
    /**
     * The status of this rollout. Readonly. In case of a failed rollout,
     * the system will automatically rollback to the current Rollout
     * version. Readonly.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.RolloutStatus status = 4;</code>
     */
    private $status = 0;
    /**
     * The name of the service associated with this Rollout.
     *
     * Generated from protobuf field <code>string service_name = 8;</code>
     */
    private $service_name = '';
    protected $strategy;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * Optional unique identifier of this Rollout. Only lower case letters, digits
     *  and '-' are allowed.
     * If not specified by client, the server will generate one. The generated id
     * will have the form of <date><revision number>, where "date" is the create
     * date in ISO 8601 format.  "revision number" is a monotonically increasing
     * positive number that is reset every day for each service.
     * An example of the generated rollout_id is '2016-02-16r1'
     *
     * Generated from protobuf field <code>string rollout_id = 1;</code>
     * @return string
     */
    public function getRolloutId()
    {
        return $this->rollout_id;
    }

    /**
     * Optional unique identifier of this Rollout. Only lower case letters, digits
     *  and '-' are allowed.
     * If not specified by client, the server will generate one. The generated id
     * will have the form of <date><revision number>, where "date" is the create
     * date in ISO 8601 format.  "revision number" is a monotonically increasing
     * positive number that is reset every day for each service.
     * An example of the generated rollout_id is '2016-02-16r1'
     *
     * Generated from protobuf field <code>string rollout_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRolloutId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout_id = $var;

        return $this;
    }

    /**
     * Creation time of the rollout. Readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Creation time of the rollout. Readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
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
     * The user who created the Rollout. Readonly.
     *
     * Generated from protobuf field <code>string created_by = 3;</code>
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * The user who created the Rollout. Readonly.
     *
     * Generated from protobuf field <code>string created_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;

        return $this;
    }

    /**
     * The status of this rollout. Readonly. In case of a failed rollout,
     * the system will automatically rollback to the current Rollout
     * version. Readonly.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.RolloutStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this rollout. Readonly. In case of a failed rollout,
     * the system will automatically rollback to the current Rollout
     * version. Readonly.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.RolloutStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicemanagement\V1\Rollout_RolloutStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Google Service Control selects service configurations based on
     * traffic percentage.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.TrafficPercentStrategy traffic_percent_strategy = 5;</code>
     * @return \Google\Api\Servicemanagement\V1\Rollout_TrafficPercentStrategy
     */
    public function getTrafficPercentStrategy()
    {
        return $this->readOneof(5);
    }

    /**
     * Google Service Control selects service configurations based on
     * traffic percentage.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.TrafficPercentStrategy traffic_percent_strategy = 5;</code>
     * @param \Google\Api\Servicemanagement\V1\Rollout_TrafficPercentStrategy $var
     * @return $this
     */
    public function setTrafficPercentStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Servicemanagement\V1\Rollout_TrafficPercentStrategy::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The strategy associated with a rollout to delete a `ManagedService`.
     * Readonly.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.DeleteServiceStrategy delete_service_strategy = 200;</code>
     * @return \Google\Api\Servicemanagement\V1\Rollout_DeleteServiceStrategy
     */
    public function getDeleteServiceStrategy()
    {
        return $this->readOneof(200);
    }

    /**
     * The strategy associated with a rollout to delete a `ManagedService`.
     * Readonly.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Rollout.DeleteServiceStrategy delete_service_strategy = 200;</code>
     * @param \Google\Api\Servicemanagement\V1\Rollout_DeleteServiceStrategy $var
     * @return $this
     */
    public function setDeleteServiceStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Servicemanagement\V1\Rollout_DeleteServiceStrategy::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * The name of the service associated with this Rollout.
     *
     * Generated from protobuf field <code>string service_name = 8;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The name of the service associated with this Rollout.
     *
     * Generated from protobuf field <code>string service_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrategy()
    {
        return $this->whichOneof("strategy");
    }

}

