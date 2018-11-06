<?php

require('../Google/Cloud/Spanner/V1/CreateSessionRequest.php');
require('../Google/Cloud/Spanner/V1/GetSessionRequest.php');
require('../Google/Cloud/Spanner/V1/ListSessionsRequest.php');
require('../Google/Cloud/Spanner/V1/DeleteSessionRequest.php');
require('../Google/Cloud/Spanner/V1/ExecuteSqlRequest.php');
require('../Google/Cloud/Spanner/V1/ReadRequest.php');
require('../Google/Cloud/Spanner/V1/KeySet.php');
require('../Google/Cloud/Spanner/V1/TransactionOptions.php');
require('../Google/Cloud/Spanner/V1/TransactionOptions/ReadWrite.php');
require('../Google/Cloud/Spanner/V1/TransactionOptions/ReadOnly.php');
require('../Google/Cloud/Spanner/V1/BeginTransactionRequest.php');
require('../Google/Cloud/Spanner/V1/CommitRequest.php');
require('../Google/Cloud/Spanner/V1/RollbackRequest.php');
require('../Google/Cloud/Spanner/V1/TransactionSelector.php');
require('../Google/Cloud/Spanner/V1/PartitionQueryRequest.php');
require('../Google/Cloud/Spanner/V1/PartitionReadRequest.php');

$_DATABASE = 'projects/grpc-prober-testing/instances/weiranf-instance/databases/test-db';
$_TEST_USERNAME = 'test_username';

function sessionManagement($client, $metrics){
	$createSessionRequest = new Google\Cloud\Spanner\V1\CreateSessionRequest();
	$createSessionRequest->setDatabase($_DATABASE);
	#Create Session test
	#Create
	$time_start = microtime_float();
	$session = $client->CreateSession($createSessionRequest);
	$lantency = (microtime_float()- $time_start) * 1000;
	$metrics['create_session_latency_ms'] = $lantency;

	// TODO: Error Check for Create

	#Get Session
	$getSessionRequest = new Google\Cloud\Spanner\V1\GetSessionRequest();
	$getSessionRequest->setName($session->getName());
	$time_start = microtime_float();
	$response = $client->GetSession($getSessionRequest);
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['get_session_latency_ms'] = $lantency;

	// TODO: Error Check for Get

	#List session
	$listSessionsRequest = new Google\Cloud\Spanner\V1\ListSessionsRequest();
	$listSessionsRequest->setDatabase($_DATABASE);
	$time_start = microtime_float();
	$response = $client->ListSeesions($listSessionsRequest);
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['list_sessions_latency_ms'] = $lantency;

	// TODO: Error Check for List

	#Delete session
	$deleteSessionRequest = new Google\Cloud\Spanner\V1\DeleteSessionRequest();
	$deleteSessionRequest->setName($session->getName());
	$time_start = microtime_float();
	$client->deleteSession($deleteSessionRequest);
	$lantency = (microtime_float() - $time_start);
	$metrics['delete_session_latency_ms'] = $lantency;

	// TODO: Error Check for Delete
}

function executeSql($client, $metrics){
	$createSessionRequest = new Google\Cloud\Spanner\V1\CreateSessionRequest();
	$createSessionRequest->setDatabase($_DATABASE);
	$session = $client->CreateSession($createSessionRequest);

	# Probing ExecuteSql call
	$time_start = microtime_float();
	$executeSqlRequest = new Google\Cloud\Spanner\V1\ExecuteSqlRequest();
	$executeSqlRequest->setSession($session->getName());
	$executeSqlRequest->setSql('select * FROM users');
	$result_set = $client->ExecuteSql($executeSqlRequest);
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['execute_sql_latency_ms'] = $lantency;

	// TODO: Error check result_set

	# Probing ExecuteStreamingSql call
	$partial_result_set = $client->ExecuteStreamingSql($executeSqlRequest);

	$time_start = microtime_float();
	$first_result = $partial_result_set->next();
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['execute_streaming_sql_latency_ms'] = $latency;

	// TODO: Error Check for sreaming sql first result
	
	$deleteSessionRequest = new Google\Cloud\Spanner\V1\DeleteSessionRequest();
	$deleteSessionRequest->setName($session->getName());
	$client->deleteSession($deleteSessionRequest);
}


function read($client, $metrics){
	$createSessionRequest = new Google\Cloud\Spanner\V1\CreateSessionRequest();
	$createSessionRequest->setDatabase($_DATABASE);
	$session = $client->CreateSession($createSessionRequest);

	# Probing Read call
	$time_start = microtime_float();
	$readRequest = new Google\Cloud\Spanner\V1\ReadRequest();
	$readRequest->setSession($session->getName());
	$readRequest->setTable('users');
	$readRequest->setColumns(['username', 'firstname', 'lastname']);
	$keyset = new Google\Cloud\Spanner\V1\KeySet();
	$keyset->setAll(True);
	$readRequest->setKey_set($keyset);
	$result_set = $client->Read($readRequest);
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['read_latency_ms'] = $latency;

	// TODO: Error Check for result_set

	# Probing StreamingRead call
	$partial_result_set = $client->StreamingRead($readRequest);
	$time_start = microtime_float();
	$first_result = $partial_result_set->next();
	$latency = (microtime_float() - $time_start) * 1000;
	$metrics['streaming_read_latency_ms'] = $latency;

	//TODO: Error Check for streaming read first result

	$deleteSessionRequest = new Google\Cloud\Spanner\V1\DeleteSessionRequest();
	$deleteSessionRequest->setName($session->getName());
	$client->deleteSession($deleteSessionRequest);
}


function transaction($client, $metrics){
	$createSessionRequest = new Google\Cloud\Spanner\V1\CreateSessionRequest();
	$createSessionRequest->setDatabase($_DATABASE);
	$session = $client->CreateSession($createSessionRequest);

	$txn_options = new Google\Cloud\Spanner\V1\TransactionOptions();
	$txn_options->setReadWrite(TransactionOptions\ReadWrite());
	$txn_request = new Google\Cloud\Spanner\V1\BeginTransactionRequest();
	$txn_request->setSession($session->getName());
	$txn_request->setOptions($txn_options);

	# Probing BeginTransaction call
	$time_start = microtime_float();
	$txn = $client->BeginTransaction($txn_request);
	$lantency = (microtime_float() - $time_start) * 1000;
	$metrics['begin_transaction_latency_ms'] = $lantency;

	# Probing Commit Call
	$commit_request = new Google\Cloud\Spanner\V1\CommitRequest();
	$commit_request->setSession($session->getName());
	$commit_request->setTransaction_id($txn->getId());

	$time_start = microtime_float();
	$client->Commit($commit_request);
	$latency = (microtime_float() - $time_start) * 1000;
	$metrics['commit_latency_ms'] = $lantency;

	# Probing Rollback call
	$txn = $client->BeginTransaction($txn_request);
	$rollback_request = new Google\Cloud\Spanner\V1\RollbackRequest();
	$rollback_request->setSession($session->getName());
	$rollback_request->setTransaction_id($txn->getId());

	$time_start = microtime_float();
	$client->Rollback($rollback_request);
	$latency = (microtime_float() - $time_start) * 1000;
	$metrics['rollback_latency_ms'] = $latency;

	$deleteSessionRequest = new Google\Cloud\Spanner\V1\DeleteSessionRequest();
	$deleteSessionRequest->setName($session->getName());
	$client->deleteSession($deleteSessionRequest); 
}


function partition($client, $metrics){
	$createSessionRequest = new Google\Cloud\Spanner\V1\CreateSessionRequest();
	$createSessionRequest->setDatabase($_DATABASE);
	$session = $client->CreateSession($createSessionRequest);

	$txn_options = new Google\Cloud\Spanner\V1\TransactionOptions();
	$txn_options->setRead_write(TransactionOptions\ReadOnly());
	$txn_selector = new Google\Cloud\Spanner\V1\TransactionSelector();
	$txn_selector->setBegin($txn_options);

	#Probing PartitionQuery call
	$ptn_query_request = new Google\Cloud\Spanner\V1\PartitionQueryRequest();
	$ptn_query_request->setSession($session->getName());
	$ptn_query_request->setSql('select * FROM users');
	$ptn_query_request->setTransaction($txn_selector);

	$time_start = microtime_float();
	$client->PartitionQuery($ptn_query_request);
	$latency = (microtime_float() - $time_start) * 1000;
	$metrics['partition_query_latency_ms'] = $latency;

	#Probing PartitionRead call
	$ptn_read_request = new Google\Cloud\Spanner\V1\PartitionReadRequest();
	$ptn_read_request->setSession($session->getName());
	$ptn_read_request->setTable('users');
	$ptn_read_request->setTansaction($txn_selector);
	$keyset = new Google\Cloud\Spanner\V1\KeySet();
	$keyset->setAll(True);
	$ptn_read_request->setKey_set($keyset);
	$ptn_read_request->setColumns(['username', 'firstname', 'lastname']);

	$time_start = microtime_float();
	$client->PartitionRead($ptn_read_request);
	$latency = (microtime_float() - $time_start) * 1000;
	$metrics['partition_read_latency_ms'] = $latency;

	# Delete Session
	$deleteSessionRequest = new Google\Cloud\Spanner\V1\DeleteSessionRequest();
	$deleteSessionRequest->setName($session->getName());
	$client->deleteSession($deleteSessionRequest); 
}

$PROBE_FUNCTIONS = [
	'session_management' => 'sessionManagement',
	'execute_sql' => 'executeSql',
	'read' => 'read',
	'transaction' => 'transaction',
	'partition' => 'partition'
];

return $PROBE_FUNCTIONS;





