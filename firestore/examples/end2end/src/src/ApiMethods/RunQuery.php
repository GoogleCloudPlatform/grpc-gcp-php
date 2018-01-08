<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\ParentResourceNameBuilder;
use Google\Cloud\Firestore\V1beta1\StructuredQuery;

class RunQuery
{
    
    public function __invoke(
        FirestoreClient $client,
        ParentResourceNameBuilder $parentResourceNameBuilder,
        StructuredQuery $query
    ) {
        
        $stream = $client->runQuery(
            $parentResourceNameBuilder->build(),
            ['structuredQuery' => $query]
        );
        
        $index = 0;
        foreach ($stream->readAll() as $response) {
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
