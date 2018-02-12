<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\ListCollectionIdsRequest;

class ListCollectionIds
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder
    ) {
        $argument = new ListCollectionIdsRequest();
        $argument->setParent($parentResourceNameBuilder->build());
        
        list($reply, $status) = $client->ListCollectionIds($argument)->wait();
        if(!$status->code) {
        	$collections = $reply->getCollectionIds();
        	foreach($collections as $collection) {
        		echo "$collection\n";
        	}
        }
    }
}
