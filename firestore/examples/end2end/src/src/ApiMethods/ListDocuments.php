<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;

class ListDocuments
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        $collectionId
    ) {
        
        $pagedResponse = $client->listDocuments(
            $parentResourceNameBuilder->build(),
            $collectionId
        );
        
        $index = 0;
        foreach ($pagedResponse->iterateAllElements() as $document) {
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
