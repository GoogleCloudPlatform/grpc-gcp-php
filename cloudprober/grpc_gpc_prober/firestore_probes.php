<?php

#TODO
require('../Google/Cloud/Firestore/V1beta1/ListDocumentsRequest.php');

$_PARENT_RESOURCE = 'projects/grpc-prober-testing/databases/(default)/documents';

function document($client, $metrics){
	
	$list_document_request = new Google\Cloud\Firestore\V1beta1\ListDocumentsRequest();
	$list_document_request->setParent($_PARENT_RESOURCE);
	$time_start = microtime_float();

	$client->ListDocuments($list_document_request);

	$lantency = (microtime_float()- $time_start) * 1000;
	$metrics['list_documents_latency_ms'] = $lantency;

}

$probFunctions = [
	'documents' => 'document'
];

return $probFunctions;