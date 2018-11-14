<?php

//use Google\Cloud\ErrorReporting\V1beta1\ReportErrorsServiceClient;
//use Google\Cloud\ErrorReporting\V1beta1\ReportedErrorEvent;

#TODO
//{$ErrorReporting} = require '@google-cloud/error-reporting';

class StackdriverUtil{
	function __construct($api){
		$this->api = $api;
		$this->metrics = [];
		$this->success = FALSE;
		//$this->err_client = new ErrorReporting();
	}

	function addMetric($key, $value){
		$this->matrics[$key] = $value;
	}

	function addMetrics($metrics){
		array_merge($this->metrics, $metrics);
	}

	function setSuccess($result){
		$this->success = $result;
	}

	function outputMetrics(){
		if ($this->success){
			echo $this->api.'_success 1';
		}
		else{
			echo $this->api.'_success 0';
		}

		foreach ($this->metrics as $key => $value) {
			echo $key.' '.$value;
		}
	}

	function reportError($err){
		error_log($err);
		# TODO
		/*
		$this->err_client->report(
		    'NodeProberFailure: gRPC(v=x.x.x) fails on '.$this->api.
            ' API. Details: '.(string)$err
		);*/
	}

}