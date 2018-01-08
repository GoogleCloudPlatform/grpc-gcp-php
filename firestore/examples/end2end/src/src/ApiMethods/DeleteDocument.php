<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\Document;
use FireStore\DocumentNameBuilder;

class DeleteDocument
{
    
    public function __invoke(
        FirestoreClient $client,
        DocumentNameBuilder $documentNameBuilder,
        $docId
    ) {
        
        echo "Deleting document $docId\n";
        
        $documentNameBuilder->setDocumentId($docId);
        
        $client->deleteDocument($documentNameBuilder->build());
        
        echo "Successfully deleted document!\n";
    }
}
