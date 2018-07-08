<?php
namespace FireStore\ApiMethods\Admin;

use FireStore\DatabaseRootNameBuilder;
use Google\Firestore\Admin\V1beta1\DeleteIndexRequest;
use Google\Firestore\Admin\V1beta1\FirestoreAdminClient;
use Google\Firestore\Admin\V1beta1\Index;

class DeleteIndex
{   
    public function __invoke(
        FirestoreAdminClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
    	$indexName
    ) {
    	// Delete Index
    	$argument = new DeleteIndexRequest();
    	$argument->setName($databaseRootNameBuilder->build().'/indexes/'.$indexName);
    	
    	list($reply, $error) = $client->DeleteIndex($argument)->wait();
    	if($error->code) {
    		echo "Failed deleting index: ".$error->details."\n";
    	}
    	else {
    		echo "Successfully deleted index\n";
    	}
    }
}
