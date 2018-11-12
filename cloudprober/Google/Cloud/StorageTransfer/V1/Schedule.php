<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transfers can be scheduled to recur or to run just once.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * The first day the recurring transfer is scheduled to run. If
     * `scheduleStartDate` is in the past, the transfer will run for the first
     * time on the following day.
     * Required.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_start_date = 1;</code>
     */
    private $schedule_start_date = null;
    /**
     * The last day the recurring transfer will be run. If `scheduleEndDate`
     * is the same as `scheduleStartDate`, the transfer will be executed only
     * once.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_end_date = 2;</code>
     */
    private $schedule_end_date = null;
    /**
     * The time in UTC at which the transfer will be scheduled to start in a day.
     * Transfers may start later than this time. If not specified, recurring and
     * one-time transfers that are scheduled to run today will run immediately;
     * recurring transfers that are scheduled to run on a future date will start
     * at approximately midnight UTC on that date. Note that when configuring a
     * transfer with the Cloud Platform Console, the transfer's start time in a
     * day is specified in your local timezone.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time_of_day = 3;</code>
     */
    private $start_time_of_day = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date $schedule_start_date
     *           The first day the recurring transfer is scheduled to run. If
     *           `scheduleStartDate` is in the past, the transfer will run for the first
     *           time on the following day.
     *           Required.
     *     @type \Google\Type\Date $schedule_end_date
     *           The last day the recurring transfer will be run. If `scheduleEndDate`
     *           is the same as `scheduleStartDate`, the transfer will be executed only
     *           once.
     *     @type \Google\Type\TimeOfDay $start_time_of_day
     *           The time in UTC at which the transfer will be scheduled to start in a day.
     *           Transfers may start later than this time. If not specified, recurring and
     *           one-time transfers that are scheduled to run today will run immediately;
     *           recurring transfers that are scheduled to run on a future date will start
     *           at approximately midnight UTC on that date. Note that when configuring a
     *           transfer with the Cloud Platform Console, the transfer's start time in a
     *           day is specified in your local timezone.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * The first day the recurring transfer is scheduled to run. If
     * `scheduleStartDate` is in the past, the transfer will run for the first
     * time on the following day.
     * Required.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_start_date = 1;</code>
     * @return \Google\Type\Date
     */
    public function getScheduleStartDate()
    {
        return $this->schedule_start_date;
    }

    /**
     * The first day the recurring transfer is scheduled to run. If
     * `scheduleStartDate` is in the past, the transfer will run for the first
     * time on the following day.
     * Required.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_start_date = 1;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setScheduleStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->schedule_start_date = $var;

        return $this;
    }

    /**
     * The last day the recurring transfer will be run. If `scheduleEndDate`
     * is the same as `scheduleStartDate`, the transfer will be executed only
     * once.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_end_date = 2;</code>
     * @return \Google\Type\Date
     */
    public function getScheduleEndDate()
    {
        return $this->schedule_end_date;
    }

    /**
     * The last day the recurring transfer will be run. If `scheduleEndDate`
     * is the same as `scheduleStartDate`, the transfer will be executed only
     * once.
     *
     * Generated from protobuf field <code>.google.type.Date schedule_end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setScheduleEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->schedule_end_date = $var;

        return $this;
    }

    /**
     * The time in UTC at which the transfer will be scheduled to start in a day.
     * Transfers may start later than this time. If not specified, recurring and
     * one-time transfers that are scheduled to run today will run immediately;
     * recurring transfers that are scheduled to run on a future date will start
     * at approximately midnight UTC on that date. Note that when configuring a
     * transfer with the Cloud Platform Console, the transfer's start time in a
     * day is specified in your local timezone.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time_of_day = 3;</code>
     * @return \Google\Type\TimeOfDay
     */
    public function getStartTimeOfDay()
    {
        return $this->start_time_of_day;
    }

    /**
     * The time in UTC at which the transfer will be scheduled to start in a day.
     * Transfers may start later than this time. If not specified, recurring and
     * one-time transfers that are scheduled to run today will run immediately;
     * recurring transfers that are scheduled to run on a future date will start
     * at approximately midnight UTC on that date. Note that when configuring a
     * transfer with the Cloud Platform Console, the transfer's start time in a
     * day is specified in your local timezone.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time_of_day = 3;</code>
     * @param \Google\Type\TimeOfDay $var
     * @return $this
     */
    public function setStartTimeOfDay($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\TimeOfDay::class);
        $this->start_time_of_day = $var;

        return $this;
    }

}
