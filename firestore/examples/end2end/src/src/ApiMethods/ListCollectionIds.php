<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;

class ListCollectionIds
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder
    ) {
        
        $pagedResponse = $client->listCollectionIds($parentResourceNameBuilder->build());
       
        foreach ($pagedResponse->iterateAllElements() as $collection) {
            echo "$collection\n";
        }
    }
}
