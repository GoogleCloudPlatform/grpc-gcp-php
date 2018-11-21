<?php

require('../vendor/autoload.php');

use Google\Cloud\ErrorReporting\V1beta1\ReportErrorsServiceClient;
use Google\Cloud\ErrorReporting\V1beta1\ErrorContext;
use Google\Cloud\ErrorReporting\V1beta1\ReportedErrorEvent;

class StackdriverUtil{
	function __construct($api){
		$this->api = $api;
		$this->metrics = [];
		$this->success = FALSE;
		$this->err_client = new ReportErrorsServiceClient();
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
		$project_name = "gRPC_PHP";
		$error_event = new ReportedErrorEvent();
		$error_event->setMessage('PHPProbeFailure: fails on '.$this->api.' API. Details: '.(string)$err."\n");

		$this->err_client->reportErrorEvent($project_name, $error_event);
	}

}