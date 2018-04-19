<?php
namespace FireStore\ApiMethods\Admin;

use FireStore\DatabaseRootNameBuilder;
use Google\Firestore\Admin\V1beta1\CreateIndexRequest;
use Google\Firestore\Admin\V1beta1\FirestoreAdminClient;
use Google\Firestore\Admin\V1beta1\Index;
use Google\Firestore\Admin\V1beta1\IndexField;
use Google\Firestore\Admin\V1beta1\IndexField_Mode;

class CreateIndex
{   
    public function __invoke(
        FirestoreAdminClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
    	$collectionId,
        $indexName,
    	$field1,
    	$field2
    ) {
    	$ageField = new IndexField();
    	$ageField->setFieldPath($field1);
    	$ageField->setMode(IndexField_Mode::ASCENDING);
    	
    	$nameField = new IndexField();
    	$nameField->setFieldPath($field2);
    	$nameField->setMode(IndexField_Mode::ASCENDING);
    	
    	$index = new Index();
    	$index->setName($indexName);
    	$index->setCollectionId($collectionId);
    	$index->setFields([$ageField, $nameField]);
    	
    	$argument = new CreateIndexRequest();
    	$argument->setParent($databaseRootNameBuilder->build());
    	$argument->setIndex($index);
    	
    	list($index, $error) = $client->CreateIndex($argument)->wait();
    	if($error->code) {
    		echo "Failed creating index. Details: ".$error->details."\n";
    	}
    	else {
    		echo "Index was succesfully created.\n";
    	}
    }
}
