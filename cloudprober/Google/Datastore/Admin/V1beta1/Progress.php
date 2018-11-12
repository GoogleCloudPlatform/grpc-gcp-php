<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1beta1/datastore_admin.proto

namespace Google\Datastore\Admin\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Measures the progress of a particular metric.
 *
 * Generated from protobuf message <code>google.datastore.admin.v1beta1.Progress</code>
 */
class Progress extends \Google\Protobuf\Internal\Message
{
    /**
     * The amount of work that has been completed. Note that this may be greater
     * than work_estimated.
     *
     * Generated from protobuf field <code>int64 work_completed = 1;</code>
     */
    private $work_completed = 0;
    /**
     * An estimate of how much work needs to be performed. May be zero if the
     * work estimate is unavailable.
     *
     * Generated from protobuf field <code>int64 work_estimated = 2;</code>
     */
    private $work_estimated = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $work_completed
     *           The amount of work that has been completed. Note that this may be greater
     *           than work_estimated.
     *     @type int|string $work_estimated
     *           An estimate of how much work needs to be performed. May be zero if the
     *           work estimate is unavailable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1Beta1\DatastoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The amount of work that has been completed. Note that this may be greater
     * than work_estimated.
     *
     * Generated from protobuf field <code>int64 work_completed = 1;</code>
     * @return int|string
     */
    public function getWorkCompleted()
    {
        return $this->work_completed;
    }

    /**
     * The amount of work that has been completed. Note that this may be greater
     * than work_estimated.
     *
     * Generated from protobuf field <code>int64 work_completed = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkCompleted($var)
    {
        GPBUtil::checkInt64($var);
        $this->work_completed = $var;

        return $this;
    }

    /**
     * An estimate of how much work needs to be performed. May be zero if the
     * work estimate is unavailable.
     *
     * Generated from protobuf field <code>int64 work_estimated = 2;</code>
     * @return int|string
     */
    public function getWorkEstimated()
    {
        return $this->work_estimated;
    }

    /**
     * An estimate of how much work needs to be performed. May be zero if the
     * work estimate is unavailable.
     *
     * Generated from protobuf field <code>int64 work_estimated = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkEstimated($var)
    {
        GPBUtil::checkInt64($var);
        $this->work_estimated = $var;

        return $this;
    }

}
