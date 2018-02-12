<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\Document;
use FireStore\DocumentNameBuilder;
use Google\Cloud\Firestore\V1beta1\DeleteDocumentRequest;

class DeleteDocument
{
    
    public function __invoke(
        FirestoreClient $client,
        DocumentNameBuilder $documentNameBuilder,
        $docId
    ) {
        
        echo "Deleting document $docId\n";
        
        $documentNameBuilder->setDocumentId($docId);
        
        $argument = new DeleteDocumentRequest();
        $argument->setName($documentNameBuilder->build());
        
        list ($document, $status) = $client->DeleteDocument($argument)->wait();
        if(!$status->code) {
        	echo "Successfully deleted document!\n";
        }
        else {
        	echo "!Failed to delete document: '.$status->details.'!\n";
        }
    }
}
