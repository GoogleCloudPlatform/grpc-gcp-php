<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/logging/v1/request_log.proto

namespace Google\Appengine\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Complete log information about a single HTTP request to an App Engine
 * application.
 *
 * Generated from protobuf message <code>google.appengine.logging.v1.RequestLog</code>
 */
class RequestLog extends \Google\Protobuf\Internal\Message
{
    /**
     * Application that handled this request.
     *
     * Generated from protobuf field <code>string app_id = 1;</code>
     */
    private $app_id = '';
    /**
     * Module of the application that handled this request.
     *
     * Generated from protobuf field <code>string module_id = 37;</code>
     */
    private $module_id = '';
    /**
     * Version of the application that handled this request.
     *
     * Generated from protobuf field <code>string version_id = 2;</code>
     */
    private $version_id = '';
    /**
     * Globally unique identifier for a request, which is based on the request
     * start time.  Request IDs for requests which started later will compare
     * greater as strings than those for requests which started earlier.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    private $request_id = '';
    /**
     * Origin IP address.
     *
     * Generated from protobuf field <code>string ip = 4;</code>
     */
    private $ip = '';
    /**
     * Time when the request started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     */
    private $start_time = null;
    /**
     * Time when the request finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     */
    private $end_time = null;
    /**
     * Latency of the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration latency = 8;</code>
     */
    private $latency = null;
    /**
     * Number of CPU megacycles used to process request.
     *
     * Generated from protobuf field <code>int64 mega_cycles = 9;</code>
     */
    private $mega_cycles = 0;
    /**
     * Request method. Example: `"GET"`, `"HEAD"`, `"PUT"`, `"POST"`, `"DELETE"`.
     *
     * Generated from protobuf field <code>string method = 10;</code>
     */
    private $method = '';
    /**
     * Contains the path and query portion of the URL that was requested. For
     * example, if the URL was "http://example.com/app?name=val", the resource
     * would be "/app?name=val".  The fragment identifier, which is identified by
     * the `#` character, is not included.
     *
     * Generated from protobuf field <code>string resource = 11;</code>
     */
    private $resource = '';
    /**
     * HTTP version of request. Example: `"HTTP/1.1"`.
     *
     * Generated from protobuf field <code>string http_version = 12;</code>
     */
    private $http_version = '';
    /**
     * HTTP response status code. Example: 200, 404.
     *
     * Generated from protobuf field <code>int32 status = 13;</code>
     */
    private $status = 0;
    /**
     * Size in bytes sent back to client by request.
     *
     * Generated from protobuf field <code>int64 response_size = 14;</code>
     */
    private $response_size = 0;
    /**
     * Referrer URL of request.
     *
     * Generated from protobuf field <code>string referrer = 15;</code>
     */
    private $referrer = '';
    /**
     * User agent that made the request.
     *
     * Generated from protobuf field <code>string user_agent = 16;</code>
     */
    private $user_agent = '';
    /**
     * The logged-in user who made the request.
     * Most likely, this is the part of the user's email before the `&#64;` sign.  The
     * field value is the same for different requests from the same user, but
     * different users can have similar names.  This information is also
     * available to the application via the App Engine Users API.
     * This field will be populated starting with App Engine 1.9.21.
     *
     * Generated from protobuf field <code>string nickname = 40;</code>
     */
    private $nickname = '';
    /**
     * File or class that handled the request.
     *
     * Generated from protobuf field <code>string url_map_entry = 17;</code>
     */
    private $url_map_entry = '';
    /**
     * Internet host and port number of the resource being requested.
     *
     * Generated from protobuf field <code>string host = 20;</code>
     */
    private $host = '';
    /**
     * An indication of the relative cost of serving this request.
     *
     * Generated from protobuf field <code>double cost = 21;</code>
     */
    private $cost = 0.0;
    /**
     * Queue name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_queue_name = 22;</code>
     */
    private $task_queue_name = '';
    /**
     * Task name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_name = 23;</code>
     */
    private $task_name = '';
    /**
     * Whether this was a loading request for the instance.
     *
     * Generated from protobuf field <code>bool was_loading_request = 24;</code>
     */
    private $was_loading_request = false;
    /**
     * Time this request spent in the pending request queue.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pending_time = 25;</code>
     */
    private $pending_time = null;
    /**
     * If the instance processing this request belongs to a manually scaled
     * module, then this is the 0-based index of the instance. Otherwise, this
     * value is -1.
     *
     * Generated from protobuf field <code>int32 instance_index = 26;</code>
     */
    private $instance_index = 0;
    /**
     * Whether this request is finished or active.
     *
     * Generated from protobuf field <code>bool finished = 27;</code>
     */
    private $finished = false;
    /**
     * Whether this is the first `RequestLog` entry for this request.  If an
     * active request has several `RequestLog` entries written to Stackdriver
     * Logging, then this field will be set for one of them.
     *
     * Generated from protobuf field <code>bool first = 42;</code>
     */
    private $first = false;
    /**
     * An identifier for the instance that handled the request.
     *
     * Generated from protobuf field <code>string instance_id = 28;</code>
     */
    private $instance_id = '';
    /**
     * A list of log lines emitted by the application while serving this request.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.LogLine line = 29;</code>
     */
    private $line;
    /**
     * App Engine release version.
     *
     * Generated from protobuf field <code>string app_engine_release = 38;</code>
     */
    private $app_engine_release = '';
    /**
     * Stackdriver Trace identifier for this request.
     *
     * Generated from protobuf field <code>string trace_id = 39;</code>
     */
    private $trace_id = '';
    /**
     * Source code for the application that handled this request. There can be
     * more than one source reference per deployed application if source code is
     * distributed among multiple repositories.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.SourceReference source_reference = 41;</code>
     */
    private $source_reference;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *           Application that handled this request.
     *     @type string $module_id
     *           Module of the application that handled this request.
     *     @type string $version_id
     *           Version of the application that handled this request.
     *     @type string $request_id
     *           Globally unique identifier for a request, which is based on the request
     *           start time.  Request IDs for requests which started later will compare
     *           greater as strings than those for requests which started earlier.
     *     @type string $ip
     *           Origin IP address.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time when the request started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Time when the request finished.
     *     @type \Google\Protobuf\Duration $latency
     *           Latency of the request.
     *     @type int|string $mega_cycles
     *           Number of CPU megacycles used to process request.
     *     @type string $method
     *           Request method. Example: `"GET"`, `"HEAD"`, `"PUT"`, `"POST"`, `"DELETE"`.
     *     @type string $resource
     *           Contains the path and query portion of the URL that was requested. For
     *           example, if the URL was "http://example.com/app?name=val", the resource
     *           would be "/app?name=val".  The fragment identifier, which is identified by
     *           the `#` character, is not included.
     *     @type string $http_version
     *           HTTP version of request. Example: `"HTTP/1.1"`.
     *     @type int $status
     *           HTTP response status code. Example: 200, 404.
     *     @type int|string $response_size
     *           Size in bytes sent back to client by request.
     *     @type string $referrer
     *           Referrer URL of request.
     *     @type string $user_agent
     *           User agent that made the request.
     *     @type string $nickname
     *           The logged-in user who made the request.
     *           Most likely, this is the part of the user's email before the `&#64;` sign.  The
     *           field value is the same for different requests from the same user, but
     *           different users can have similar names.  This information is also
     *           available to the application via the App Engine Users API.
     *           This field will be populated starting with App Engine 1.9.21.
     *     @type string $url_map_entry
     *           File or class that handled the request.
     *     @type string $host
     *           Internet host and port number of the resource being requested.
     *     @type float $cost
     *           An indication of the relative cost of serving this request.
     *     @type string $task_queue_name
     *           Queue name of the request, in the case of an offline request.
     *     @type string $task_name
     *           Task name of the request, in the case of an offline request.
     *     @type bool $was_loading_request
     *           Whether this was a loading request for the instance.
     *     @type \Google\Protobuf\Duration $pending_time
     *           Time this request spent in the pending request queue.
     *     @type int $instance_index
     *           If the instance processing this request belongs to a manually scaled
     *           module, then this is the 0-based index of the instance. Otherwise, this
     *           value is -1.
     *     @type bool $finished
     *           Whether this request is finished or active.
     *     @type bool $first
     *           Whether this is the first `RequestLog` entry for this request.  If an
     *           active request has several `RequestLog` entries written to Stackdriver
     *           Logging, then this field will be set for one of them.
     *     @type string $instance_id
     *           An identifier for the instance that handled the request.
     *     @type \Google\Appengine\Logging\V1\LogLine[]|\Google\Protobuf\Internal\RepeatedField $line
     *           A list of log lines emitted by the application while serving this request.
     *     @type string $app_engine_release
     *           App Engine release version.
     *     @type string $trace_id
     *           Stackdriver Trace identifier for this request.
     *     @type \Google\Appengine\Logging\V1\SourceReference[]|\Google\Protobuf\Internal\RepeatedField $source_reference
     *           Source code for the application that handled this request. There can be
     *           more than one source reference per deployed application if source code is
     *           distributed among multiple repositories.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\Logging\V1\RequestLog::initOnce();
        parent::__construct($data);
    }

    /**
     * Application that handled this request.
     *
     * Generated from protobuf field <code>string app_id = 1;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Application that handled this request.
     *
     * Generated from protobuf field <code>string app_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Module of the application that handled this request.
     *
     * Generated from protobuf field <code>string module_id = 37;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Module of the application that handled this request.
     *
     * Generated from protobuf field <code>string module_id = 37;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

    /**
     * Version of the application that handled this request.
     *
     * Generated from protobuf field <code>string version_id = 2;</code>
     * @return string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Version of the application that handled this request.
     *
     * Generated from protobuf field <code>string version_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_id = $var;

        return $this;
    }

    /**
     * Globally unique identifier for a request, which is based on the request
     * start time.  Request IDs for requests which started later will compare
     * greater as strings than those for requests which started earlier.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Globally unique identifier for a request, which is based on the request
     * start time.  Request IDs for requests which started later will compare
     * greater as strings than those for requests which started earlier.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
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
     * Origin IP address.
     *
     * Generated from protobuf field <code>string ip = 4;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Origin IP address.
     *
     * Generated from protobuf field <code>string ip = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

    /**
     * Time when the request started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Time when the request started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Time when the request finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Time when the request finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Latency of the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration latency = 8;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * Latency of the request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration latency = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->latency = $var;

        return $this;
    }

    /**
     * Number of CPU megacycles used to process request.
     *
     * Generated from protobuf field <code>int64 mega_cycles = 9;</code>
     * @return int|string
     */
    public function getMegaCycles()
    {
        return $this->mega_cycles;
    }

    /**
     * Number of CPU megacycles used to process request.
     *
     * Generated from protobuf field <code>int64 mega_cycles = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMegaCycles($var)
    {
        GPBUtil::checkInt64($var);
        $this->mega_cycles = $var;

        return $this;
    }

    /**
     * Request method. Example: `"GET"`, `"HEAD"`, `"PUT"`, `"POST"`, `"DELETE"`.
     *
     * Generated from protobuf field <code>string method = 10;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Request method. Example: `"GET"`, `"HEAD"`, `"PUT"`, `"POST"`, `"DELETE"`.
     *
     * Generated from protobuf field <code>string method = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Contains the path and query portion of the URL that was requested. For
     * example, if the URL was "http://example.com/app?name=val", the resource
     * would be "/app?name=val".  The fragment identifier, which is identified by
     * the `#` character, is not included.
     *
     * Generated from protobuf field <code>string resource = 11;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Contains the path and query portion of the URL that was requested. For
     * example, if the URL was "http://example.com/app?name=val", the resource
     * would be "/app?name=val".  The fragment identifier, which is identified by
     * the `#` character, is not included.
     *
     * Generated from protobuf field <code>string resource = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * HTTP version of request. Example: `"HTTP/1.1"`.
     *
     * Generated from protobuf field <code>string http_version = 12;</code>
     * @return string
     */
    public function getHttpVersion()
    {
        return $this->http_version;
    }

    /**
     * HTTP version of request. Example: `"HTTP/1.1"`.
     *
     * Generated from protobuf field <code>string http_version = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_version = $var;

        return $this;
    }

    /**
     * HTTP response status code. Example: 200, 404.
     *
     * Generated from protobuf field <code>int32 status = 13;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * HTTP response status code. Example: 200, 404.
     *
     * Generated from protobuf field <code>int32 status = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Size in bytes sent back to client by request.
     *
     * Generated from protobuf field <code>int64 response_size = 14;</code>
     * @return int|string
     */
    public function getResponseSize()
    {
        return $this->response_size;
    }

    /**
     * Size in bytes sent back to client by request.
     *
     * Generated from protobuf field <code>int64 response_size = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setResponseSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->response_size = $var;

        return $this;
    }

    /**
     * Referrer URL of request.
     *
     * Generated from protobuf field <code>string referrer = 15;</code>
     * @return string
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * Referrer URL of request.
     *
     * Generated from protobuf field <code>string referrer = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setReferrer($var)
    {
        GPBUtil::checkString($var, True);
        $this->referrer = $var;

        return $this;
    }

    /**
     * User agent that made the request.
     *
     * Generated from protobuf field <code>string user_agent = 16;</code>
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * User agent that made the request.
     *
     * Generated from protobuf field <code>string user_agent = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;

        return $this;
    }

    /**
     * The logged-in user who made the request.
     * Most likely, this is the part of the user's email before the `&#64;` sign.  The
     * field value is the same for different requests from the same user, but
     * different users can have similar names.  This information is also
     * available to the application via the App Engine Users API.
     * This field will be populated starting with App Engine 1.9.21.
     *
     * Generated from protobuf field <code>string nickname = 40;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * The logged-in user who made the request.
     * Most likely, this is the part of the user's email before the `&#64;` sign.  The
     * field value is the same for different requests from the same user, but
     * different users can have similar names.  This information is also
     * available to the application via the App Engine Users API.
     * This field will be populated starting with App Engine 1.9.21.
     *
     * Generated from protobuf field <code>string nickname = 40;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * File or class that handled the request.
     *
     * Generated from protobuf field <code>string url_map_entry = 17;</code>
     * @return string
     */
    public function getUrlMapEntry()
    {
        return $this->url_map_entry;
    }

    /**
     * File or class that handled the request.
     *
     * Generated from protobuf field <code>string url_map_entry = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMapEntry($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_map_entry = $var;

        return $this;
    }

    /**
     * Internet host and port number of the resource being requested.
     *
     * Generated from protobuf field <code>string host = 20;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Internet host and port number of the resource being requested.
     *
     * Generated from protobuf field <code>string host = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * An indication of the relative cost of serving this request.
     *
     * Generated from protobuf field <code>double cost = 21;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * An indication of the relative cost of serving this request.
     *
     * Generated from protobuf field <code>double cost = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * Queue name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_queue_name = 22;</code>
     * @return string
     */
    public function getTaskQueueName()
    {
        return $this->task_queue_name;
    }

    /**
     * Queue name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_queue_name = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskQueueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_queue_name = $var;

        return $this;
    }

    /**
     * Task name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_name = 23;</code>
     * @return string
     */
    public function getTaskName()
    {
        return $this->task_name;
    }

    /**
     * Task name of the request, in the case of an offline request.
     *
     * Generated from protobuf field <code>string task_name = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_name = $var;

        return $this;
    }

    /**
     * Whether this was a loading request for the instance.
     *
     * Generated from protobuf field <code>bool was_loading_request = 24;</code>
     * @return bool
     */
    public function getWasLoadingRequest()
    {
        return $this->was_loading_request;
    }

    /**
     * Whether this was a loading request for the instance.
     *
     * Generated from protobuf field <code>bool was_loading_request = 24;</code>
     * @param bool $var
     * @return $this
     */
    public function setWasLoadingRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->was_loading_request = $var;

        return $this;
    }

    /**
     * Time this request spent in the pending request queue.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pending_time = 25;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getPendingTime()
    {
        return $this->pending_time;
    }

    /**
     * Time this request spent in the pending request queue.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration pending_time = 25;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPendingTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->pending_time = $var;

        return $this;
    }

    /**
     * If the instance processing this request belongs to a manually scaled
     * module, then this is the 0-based index of the instance. Otherwise, this
     * value is -1.
     *
     * Generated from protobuf field <code>int32 instance_index = 26;</code>
     * @return int
     */
    public function getInstanceIndex()
    {
        return $this->instance_index;
    }

    /**
     * If the instance processing this request belongs to a manually scaled
     * module, then this is the 0-based index of the instance. Otherwise, this
     * value is -1.
     *
     * Generated from protobuf field <code>int32 instance_index = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setInstanceIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->instance_index = $var;

        return $this;
    }

    /**
     * Whether this request is finished or active.
     *
     * Generated from protobuf field <code>bool finished = 27;</code>
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Whether this request is finished or active.
     *
     * Generated from protobuf field <code>bool finished = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->finished = $var;

        return $this;
    }

    /**
     * Whether this is the first `RequestLog` entry for this request.  If an
     * active request has several `RequestLog` entries written to Stackdriver
     * Logging, then this field will be set for one of them.
     *
     * Generated from protobuf field <code>bool first = 42;</code>
     * @return bool
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Whether this is the first `RequestLog` entry for this request.  If an
     * active request has several `RequestLog` entries written to Stackdriver
     * Logging, then this field will be set for one of them.
     *
     * Generated from protobuf field <code>bool first = 42;</code>
     * @param bool $var
     * @return $this
     */
    public function setFirst($var)
    {
        GPBUtil::checkBool($var);
        $this->first = $var;

        return $this;
    }

    /**
     * An identifier for the instance that handled the request.
     *
     * Generated from protobuf field <code>string instance_id = 28;</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * An identifier for the instance that handled the request.
     *
     * Generated from protobuf field <code>string instance_id = 28;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * A list of log lines emitted by the application while serving this request.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.LogLine line = 29;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * A list of log lines emitted by the application while serving this request.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.LogLine line = 29;</code>
     * @param \Google\Appengine\Logging\V1\LogLine[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLine($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\Logging\V1\LogLine::class);
        $this->line = $arr;

        return $this;
    }

    /**
     * App Engine release version.
     *
     * Generated from protobuf field <code>string app_engine_release = 38;</code>
     * @return string
     */
    public function getAppEngineRelease()
    {
        return $this->app_engine_release;
    }

    /**
     * App Engine release version.
     *
     * Generated from protobuf field <code>string app_engine_release = 38;</code>
     * @param string $var
     * @return $this
     */
    public function setAppEngineRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_engine_release = $var;

        return $this;
    }

    /**
     * Stackdriver Trace identifier for this request.
     *
     * Generated from protobuf field <code>string trace_id = 39;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Stackdriver Trace identifier for this request.
     *
     * Generated from protobuf field <code>string trace_id = 39;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * Source code for the application that handled this request. There can be
     * more than one source reference per deployed application if source code is
     * distributed among multiple repositories.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.SourceReference source_reference = 41;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceReference()
    {
        return $this->source_reference;
    }

    /**
     * Source code for the application that handled this request. There can be
     * more than one source reference per deployed application if source code is
     * distributed among multiple repositories.
     *
     * Generated from protobuf field <code>repeated .google.appengine.logging.v1.SourceReference source_reference = 41;</code>
     * @param \Google\Appengine\Logging\V1\SourceReference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceReference($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\Logging\V1\SourceReference::class);
        $this->source_reference = $arr;

        return $this;
    }

}
