<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\DocumentNameBuilder;
use FireStore\DatabaseRootNameBuilder;

class BatchGetDocuments
{
    
    public function __invoke(
        FirestoreClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        DocumentNameBuilder $documentNameBuilder,
        $docIds
    ) {
        foreach ($docIds as $docId) {
            $documentNameBuilder->setDocumentId($docId);
            $documents[] = $documentNameBuilder->build();
        }
        
        $stream = $client->batchGetDocuments(
            $databaseRootNameBuilder->build(),
            $documents
        );
        
        foreach ($stream->readAll() as $element) {
            $result = $element->getResult();
           
            if ($element->getFound()) {
                $docName = $element->getFound()->getName();
                echo "Document was $result: $docName\n";
            } else {
                $docName = $element->getMissing();
                echo "Document is $result: $docName\n";
            }
            
            $transaction = $element->getTransaction();
        }
    }
}
