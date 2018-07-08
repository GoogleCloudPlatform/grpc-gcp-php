<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\Document;
use Google\Cloud\Firestore\V1beta1\CreateDocumentRequest;

class CreateDocument
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        $collectionId,
        $docId
    ) {
        
        $document = new Document();
        
        $argument = new CreateDocumentRequest();
        $argument->setParent($parentResourceNameBuilder->build());
        $argument->setCollectionId($collectionId);
        $argument->setDocumentId($docId);
        $argument->setDocument($document);
        
        list ($document, $error) = $client->CreateDocument($argument)->wait();
        if(!$error->code) {
        	echo "Successfully created new document!\n";
        	echo "Name: {$document->getName()}\n";
        }
        else {
        	echo "!Failed to create document: '.$error->details.'!\n";
        }
    }
}
