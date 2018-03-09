<?php
namespace FireStore\ApiMethods\Admin;

use FireStore\DatabaseRootNameBuilder;
use Google\Firestore\Admin\V1beta1\FirestoreAdminClient;
use Google\Firestore\Admin\V1beta1\Index;
use Google\Firestore\Admin\V1beta1\ListIndexesRequest;

class ListIndexes
{
    public function __invoke(
        FirestoreAdminClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder
    ) {
    	$argument = new ListIndexesRequest();
    	$argument->setParent($databaseRootNameBuilder->build());
    	
    	list($reply, $error) = $client->ListIndexes($argument)->wait();
    	if($error->code) {
    		echo "Failed listing indexes. Details: ".$error->details."\n";
    		return;
    	}
    	
    	foreach($reply->getIndexes() as $index) {
    		echo "Name:".$index->getName()."\n";
    		echo "Collection:".$index->getCollectionId()."\n";
    	}
    }
}
