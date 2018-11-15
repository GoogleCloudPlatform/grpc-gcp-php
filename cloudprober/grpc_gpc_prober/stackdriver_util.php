<?php

require('../vendor/autoload.php');

class StackdriverUtil{
	function __construct($api){
		$this->api = $api;
		$this->metrics = [];
		$this->success = FALSE;
		$this->err_client = new Google\Cloud\ErrorReporting\V1beta1\ReportErrorsServiceClient();
	}

	function addMetric($key, $value){
		$this->matrics[$key] = $value;
	}

	function addMetrics($metrics){
		//array_merge($this->metrics, $metrics);
		$this->metrics = $metrics;
	}

	function setSuccess($result){
		$this->success = $result;
	}

	function outputMetrics(){
		if ($this->success){
			echo $this->api.'_success 1'."\n";
		}
		else{
			echo $this->api.'_success 0'."\n";
		}
		foreach ($this->metrics as $key => $value) {
			echo $key.' '.$value."\n";
		}
	}

	function reportError($err){
		error_log($err);
		$error_event = new Google\Cloud\ErrorReporting\V1beta1\ReportErrorEvent();
		$error_event->setMessage('PHPProbeFailure: fails on '.$this->api.' API. Details: '.(string)$err."\n");

		$error_req = new Google\Cloud\ErrorReporting\V1beta1\ReportErrorEventRequest();
		$error_req->setProjectName('gRPC: '.$this->api);
		$error_req->setEvent($error_event);

		$this->err_client->ReportErrorEvent($error_req);
	}

}