<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\StructuredQuery;
use Google\Cloud\Firestore\V1beta1\RunQueryRequest;

class RunQuery
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        StructuredQuery $query
    ) {
        
    	$argument = new RunQueryRequest();
    	$argument->setParent($parentResourceNameBuilder->build());
    	$argument->setStructuredQuery($query);
    	
    	$stream = $client->RunQuery($argument);

        $index = 0;
        foreach ($stream->responses() as $response) {
            $document = $response->getDocument();
            if (null == $document) {
                continue;
            }
            $index++;
            
            $name = $document->getName();
            echo "=> Document $index: $name\n";
            
            $fields = $document->getFields();
            foreach ($fields as $name => $value) {
                $type = $value->getValueType();
                
                $method = 'get'.  ucfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $type))));
                $data = $value->$method();
                
                echo "$name => $data\n";
            }
        }
    }
}
