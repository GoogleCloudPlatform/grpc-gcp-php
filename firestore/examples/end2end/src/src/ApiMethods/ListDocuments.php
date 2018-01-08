<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\ListDocumentsRequest;

class ListDocuments
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        $collectionId
    ) {
    	
    	$argument = new ListDocumentsRequest();
    	$argument->setParent($parentResourceNameBuilder->build());
    	$argument->setCollectionId($collectionId);
    	
    	list($pagedResponse, $error) = $client->ListDocuments($argument)->wait();
    	if($error->code) {
    		echo "!Failed listing document: '.$error->details.'!\n";
    		return;
    	}
    	
    	// we have successful request
    	$documents = $pagedResponse->getDocuments();
    	$index = 0;
    	foreach($documents as $document) {
    		$index++;
    		$name = $document->getName();
    		echo "=> Document $index: $name\n";
    		$fields = $document->getFields();
    		foreach ($fields as $name => $value) {
    			echo "$name => ".$value->getStringValue()."\n";
    		}
    	}
    }
}
