<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\Document;

class CreateDocument
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        $collectionId,
        $docId
    ) {
        
        $document = new Document();
        
        $document = $client->createDocument(
            $parentResourceNameBuilder->build(),
            $collectionId,
            $docId,
            $document
        );
        
        echo "Successfully created new document!\n";
        echo "Name: {$document->getName()}\n";
    }
}
