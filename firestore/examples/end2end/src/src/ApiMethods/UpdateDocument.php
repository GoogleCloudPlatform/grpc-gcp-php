<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\DocumentMask;
use Google\Protobuf\Internal\MapField;
use Google\Cloud\Firestore\V1beta1\Value;
use Google\Protobuf\Internal\GPBType;
use FireStore\DocumentNameBuilder;

class UpdateDocument
{
    
    public function __invoke(
        FirestoreClient $client,
        DocumentNameBuilder $documentNameBuilder,
        $docId,
        $fieldName,
        $newValue
    ) {
        $documentNameBuilder->setDocumentId($docId);
        
        $documentName = $documentNameBuilder->build();
        
        echo str_pad('-', 79, '-') . "\n";
        
        $document = $client->getDocument($documentName);
        
        $updateMask = new DocumentMask();
        $updateMask->setFieldPaths([$fieldName]);
        
        // this is how we can add different fields to a document
        $field = new MapField(GPBType::STRING, GPBType::MESSAGE, Value::class);
        $value = new Value();
        $value->setStringValue($newValue);
        $field[$fieldName] = $value;
        
        $document->setFields($field);
        
        return $client->updateDocument($document, $updateMask);
    }
}
