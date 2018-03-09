<?php
namespace FireStore\ApiMethods\Admin;

use FireStore\DatabaseRootNameBuilder;
use Google\Firestore\Admin\V1beta1\FirestoreAdminClient;
use Google\Firestore\Admin\V1beta1\GetIndexRequest;
use Google\Firestore\Admin\V1beta1\Index;

class GetIndex
{
    public function __invoke(
        FirestoreAdminClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        $indexName
    ) {
    	// GetIndex
    	$argument = new GetIndexRequest();
    	$argument->setName($databaseRootNameBuilder->build().'/indexes/'.$indexName);
    	
    	list($index, $error) = $client->GetIndex($argument)->wait();
    	if($error->code) {
    		echo "Failed getting index. Details: ".$error->details."\n";
    	}
    	else {
    		echo "Index was successfully fetched.";
    		echo "Index Full Name:".$index->getName()."\n";
    	}
    }
}
