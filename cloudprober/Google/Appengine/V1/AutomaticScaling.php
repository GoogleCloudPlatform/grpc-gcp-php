<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Automatic scaling is based on request rate, response latencies, and other
 * application metrics.
 *
 * Generated from protobuf message <code>google.appengine.v1.AutomaticScaling</code>
 */
class AutomaticScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * Amount of time that the
     * [Autoscaler](https://cloud.google.com/compute/docs/autoscaler/)
     * should wait between changes to the number of virtual machines.
     * Only applicable for VM runtimes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cool_down_period = 1;</code>
     */
    private $cool_down_period = null;
    /**
     * Target scaling by CPU usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CpuUtilization cpu_utilization = 2;</code>
     */
    private $cpu_utilization = null;
    /**
     * Number of concurrent requests an automatic scaling instance can accept
     * before the scheduler spawns a new instance.
     * Defaults to a runtime-specific value.
     *
     * Generated from protobuf field <code>int32 max_concurrent_requests = 3;</code>
     */
    private $max_concurrent_requests = 0;
    /**
     * Maximum number of idle instances that should be maintained for this
     * version.
     *
     * Generated from protobuf field <code>int32 max_idle_instances = 4;</code>
     */
    private $max_idle_instances = 0;
    /**
     * Maximum number of instances that should be started to handle requests.
     *
     * Generated from protobuf field <code>int32 max_total_instances = 5;</code>
     */
    private $max_total_instances = 0;
    /**
     * Maximum amount of time that a request should wait in the pending queue
     * before starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_pending_latency = 6;</code>
     */
    private $max_pending_latency = null;
    /**
     * Minimum number of idle instances that should be maintained for
     * this version. Only applicable for the default version of a service.
     *
     * Generated from protobuf field <code>int32 min_idle_instances = 7;</code>
     */
    private $min_idle_instances = 0;
    /**
     * Minimum number of instances that should be maintained for this version.
     *
     * Generated from protobuf field <code>int32 min_total_instances = 8;</code>
     */
    private $min_total_instances = 0;
    /**
     * Minimum amount of time a request should wait in the pending queue before
     * starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_pending_latency = 9;</code>
     */
    private $min_pending_latency = null;
    /**
     * Target scaling by request utilization.
     *
     * Generated from protobuf field <code>.google.appengine.v1.RequestUtilization request_utilization = 10;</code>
     */
    private $request_utilization = null;
    /**
     * Target scaling by disk usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DiskUtilization disk_utilization = 11;</code>
     */
    private $disk_utilization = null;
    /**
     * Target scaling by network usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkUtilization network_utilization = 12;</code>
     */
    private $network_utilization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $cool_down_period
     *           Amount of time that the
     *           [Autoscaler](https://cloud.google.com/compute/docs/autoscaler/)
     *           should wait between changes to the number of virtual machines.
     *           Only applicable for VM runtimes.
     *     @type \Google\Appengine\V1\CpuUtilization $cpu_utilization
     *           Target scaling by CPU usage.
     *     @type int $max_concurrent_requests
     *           Number of concurrent requests an automatic scaling instance can accept
     *           before the scheduler spawns a new instance.
     *           Defaults to a runtime-specific value.
     *     @type int $max_idle_instances
     *           Maximum number of idle instances that should be maintained for this
     *           version.
     *     @type int $max_total_instances
     *           Maximum number of instances that should be started to handle requests.
     *     @type \Google\Protobuf\Duration $max_pending_latency
     *           Maximum amount of time that a request should wait in the pending queue
     *           before starting a new instance to handle it.
     *     @type int $min_idle_instances
     *           Minimum number of idle instances that should be maintained for
     *           this version. Only applicable for the default version of a service.
     *     @type int $min_total_instances
     *           Minimum number of instances that should be maintained for this version.
     *     @type \Google\Protobuf\Duration $min_pending_latency
     *           Minimum amount of time a request should wait in the pending queue before
     *           starting a new instance to handle it.
     *     @type \Google\Appengine\V1\RequestUtilization $request_utilization
     *           Target scaling by request utilization.
     *     @type \Google\Appengine\V1\DiskUtilization $disk_utilization
     *           Target scaling by disk usage.
     *     @type \Google\Appengine\V1\NetworkUtilization $network_utilization
     *           Target scaling by network usage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Amount of time that the
     * [Autoscaler](https://cloud.google.com/compute/docs/autoscaler/)
     * should wait between changes to the number of virtual machines.
     * Only applicable for VM runtimes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cool_down_period = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getCoolDownPeriod()
    {
        return $this->cool_down_period;
    }

    /**
     * Amount of time that the
     * [Autoscaler](https://cloud.google.com/compute/docs/autoscaler/)
     * should wait between changes to the number of virtual machines.
     * Only applicable for VM runtimes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cool_down_period = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCoolDownPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->cool_down_period = $var;

        return $this;
    }

    /**
     * Target scaling by CPU usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CpuUtilization cpu_utilization = 2;</code>
     * @return \Google\Appengine\V1\CpuUtilization
     */
    public function getCpuUtilization()
    {
        return $this->cpu_utilization;
    }

    /**
     * Target scaling by CPU usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CpuUtilization cpu_utilization = 2;</code>
     * @param \Google\Appengine\V1\CpuUtilization $var
     * @return $this
     */
    public function setCpuUtilization($var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\CpuUtilization::class);
        $this->cpu_utilization = $var;

        return $this;
    }

    /**
     * Number of concurrent requests an automatic scaling instance can accept
     * before the scheduler spawns a new instance.
     * Defaults to a runtime-specific value.
     *
     * Generated from protobuf field <code>int32 max_concurrent_requests = 3;</code>
     * @return int
     */
    public function getMaxConcurrentRequests()
    {
        return $this->max_concurrent_requests;
    }

    /**
     * Number of concurrent requests an automatic scaling instance can accept
     * before the scheduler spawns a new instance.
     * Defaults to a runtime-specific value.
     *
     * Generated from protobuf field <code>int32 max_concurrent_requests = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConcurrentRequests($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_concurrent_requests = $var;

        return $this;
    }

    /**
     * Maximum number of idle instances that should be maintained for this
     * version.
     *
     * Generated from protobuf field <code>int32 max_idle_instances = 4;</code>
     * @return int
     */
    public function getMaxIdleInstances()
    {
        return $this->max_idle_instances;
    }

    /**
     * Maximum number of idle instances that should be maintained for this
     * version.
     *
     * Generated from protobuf field <code>int32 max_idle_instances = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxIdleInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_idle_instances = $var;

        return $this;
    }

    /**
     * Maximum number of instances that should be started to handle requests.
     *
     * Generated from protobuf field <code>int32 max_total_instances = 5;</code>
     * @return int
     */
    public function getMaxTotalInstances()
    {
        return $this->max_total_instances;
    }

    /**
     * Maximum number of instances that should be started to handle requests.
     *
     * Generated from protobuf field <code>int32 max_total_instances = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxTotalInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_total_instances = $var;

        return $this;
    }

    /**
     * Maximum amount of time that a request should wait in the pending queue
     * before starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_pending_latency = 6;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getMaxPendingLatency()
    {
        return $this->max_pending_latency;
    }

    /**
     * Maximum amount of time that a request should wait in the pending queue
     * before starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_pending_latency = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxPendingLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_pending_latency = $var;

        return $this;
    }

    /**
     * Minimum number of idle instances that should be maintained for
     * this version. Only applicable for the default version of a service.
     *
     * Generated from protobuf field <code>int32 min_idle_instances = 7;</code>
     * @return int
     */
    public function getMinIdleInstances()
    {
        return $this->min_idle_instances;
    }

    /**
     * Minimum number of idle instances that should be maintained for
     * this version. Only applicable for the default version of a service.
     *
     * Generated from protobuf field <code>int32 min_idle_instances = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMinIdleInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_idle_instances = $var;

        return $this;
    }

    /**
     * Minimum number of instances that should be maintained for this version.
     *
     * Generated from protobuf field <code>int32 min_total_instances = 8;</code>
     * @return int
     */
    public function getMinTotalInstances()
    {
        return $this->min_total_instances;
    }

    /**
     * Minimum number of instances that should be maintained for this version.
     *
     * Generated from protobuf field <code>int32 min_total_instances = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMinTotalInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_total_instances = $var;

        return $this;
    }

    /**
     * Minimum amount of time a request should wait in the pending queue before
     * starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_pending_latency = 9;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getMinPendingLatency()
    {
        return $this->min_pending_latency;
    }

    /**
     * Minimum amount of time a request should wait in the pending queue before
     * starting a new instance to handle it.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_pending_latency = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinPendingLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_pending_latency = $var;

        return $this;
    }

    /**
     * Target scaling by request utilization.
     *
     * Generated from protobuf field <code>.google.appengine.v1.RequestUtilization request_utilization = 10;</code>
     * @return \Google\Appengine\V1\RequestUtilization
     */
    public function getRequestUtilization()
    {
        return $this->request_utilization;
    }

    /**
     * Target scaling by request utilization.
     *
     * Generated from protobuf field <code>.google.appengine.v1.RequestUtilization request_utilization = 10;</code>
     * @param \Google\Appengine\V1\RequestUtilization $var
     * @return $this
     */
    public function setRequestUtilization($var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\RequestUtilization::class);
        $this->request_utilization = $var;

        return $this;
    }

    /**
     * Target scaling by disk usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DiskUtilization disk_utilization = 11;</code>
     * @return \Google\Appengine\V1\DiskUtilization
     */
    public function getDiskUtilization()
    {
        return $this->disk_utilization;
    }

    /**
     * Target scaling by disk usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DiskUtilization disk_utilization = 11;</code>
     * @param \Google\Appengine\V1\DiskUtilization $var
     * @return $this
     */
    public function setDiskUtilization($var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\DiskUtilization::class);
        $this->disk_utilization = $var;

        return $this;
    }

    /**
     * Target scaling by network usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkUtilization network_utilization = 12;</code>
     * @return \Google\Appengine\V1\NetworkUtilization
     */
    public function getNetworkUtilization()
    {
        return $this->network_utilization;
    }

    /**
     * Target scaling by network usage.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkUtilization network_utilization = 12;</code>
     * @param \Google\Appengine\V1\NetworkUtilization $var
     * @return $this
     */
    public function setNetworkUtilization($var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\NetworkUtilization::class);
        $this->network_utilization = $var;

        return $this;
    }

}
