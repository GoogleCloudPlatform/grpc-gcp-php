<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListTimeSeries` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListTimeSeriesRequest</code>
 */
class ListTimeSeriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project on which to execute the request. The format is
     * "projects/{project_id_or_number}".
     *
     * Generated from protobuf field <code>string name = 10;</code>
     */
    private $name = '';
    /**
     * A [monitoring filter](/monitoring/api/v3/filters) that specifies which time
     * series should be returned.  The filter must specify a single metric type,
     * and can additionally specify metric labels and other information. For
     * example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.label.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4;</code>
     */
    private $interval = null;
    /**
     * By default, the raw time series data is returned.
     * Use this field to combine multiple time series for different
     * views of the data.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     */
    private $aggregation = null;
    /**
     * Specifies the order in which the points of the time series should
     * be returned.  By default, results are not ordered.  Currently,
     * this field must be left blank.
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     */
    private $order_by = '';
    /**
     * Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7;</code>
     */
    private $view = 0;
    /**
     * A positive number that is the maximum number of results to return.
     * When `view` field sets to `FULL`, it limits the number of `Points` server
     * will return; if `view` field is `HEADERS`, it limits the number of
     * `TimeSeries` server will return.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct();
    }

    /**
     * The project on which to execute the request. The format is
     * "projects/{project_id_or_number}".
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The project on which to execute the request. The format is
     * "projects/{project_id_or_number}".
     *
     * Generated from protobuf field <code>string name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A [monitoring filter](/monitoring/api/v3/filters) that specifies which time
     * series should be returned.  The filter must specify a single metric type,
     * and can additionally specify metric labels and other information. For
     * example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.label.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A [monitoring filter](/monitoring/api/v3/filters) that specifies which time
     * series should be returned.  The filter must specify a single metric type,
     * and can additionally specify metric labels and other information. For
     * example:
     *     metric.type = "compute.googleapis.com/instance/cpu/usage_time" AND
     *         metric.label.instance_name = "my-instance-name"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4;</code>
     * @return \Google\Cloud\Monitoring\V3\TimeInterval
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * The time interval for which results should be returned. Only time series
     * that contain data points in the specified interval are included
     * in the response.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval interval = 4;</code>
     * @param \Google\Cloud\Monitoring\V3\TimeInterval $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TimeInterval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * By default, the raw time series data is returned.
     * Use this field to combine multiple time series for different
     * views of the data.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     * @return \Google\Cloud\Monitoring\V3\Aggregation
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * By default, the raw time series data is returned.
     * Use this field to combine multiple time series for different
     * views of the data.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Aggregation aggregation = 5;</code>
     * @param \Google\Cloud\Monitoring\V3\Aggregation $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Aggregation::class);
        $this->aggregation = $var;

        return $this;
    }

    /**
     * Specifies the order in which the points of the time series should
     * be returned.  By default, results are not ordered.  Currently,
     * this field must be left blank.
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Specifies the order in which the points of the time series should
     * be returned.  By default, results are not ordered.  Currently,
     * this field must be left blank.
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Specifies which information is returned about the time series.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ListTimeSeriesRequest.TimeSeriesView view = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\ListTimeSeriesRequest_TimeSeriesView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * A positive number that is the maximum number of results to return.
     * When `view` field sets to `FULL`, it limits the number of `Points` server
     * will return; if `view` field is `HEADERS`, it limits the number of
     * `TimeSeries` server will return.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A positive number that is the maximum number of results to return.
     * When `view` field sets to `FULL`, it limits the number of `Points` server
     * will return; if `view` field is `HEADERS`, it limits the number of
     * `TimeSeries` server will return.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

