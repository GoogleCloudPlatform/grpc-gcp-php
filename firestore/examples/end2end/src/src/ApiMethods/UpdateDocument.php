<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\DocumentMask;
use Google\Protobuf\Internal\MapField;
use Google\Cloud\Firestore\V1beta1\Value;
use Google\Protobuf\Internal\GPBType;
use FireStore\DocumentNameBuilder;
use Google\Cloud\Firestore\V1beta1\UpdateDocumentRequest;
use Google\Cloud\Firestore\V1beta1\GetDocumentRequest;

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
        
        $argument = new GetDocumentRequest();
        $argument->setName($documentName);
        
        list($document, $error) = $client->GetDocument($argument)->wait();
        if($error->code) {
        	echo "!Failed fetching document: '.$error->details.'!\n";
        	return;
        }
        
        $updateMask = new DocumentMask();
        $updateMask->setFieldPaths([$fieldName]);
        
        // this is how we can add different fields to a document
        $field = new MapField(GPBType::STRING, GPBType::MESSAGE, Value::class);
        $value = new Value();
        $value->setStringValue($newValue);
        $field[$fieldName] = $value;
        
        $document->setFields($field);
        
        $argument = new UpdateDocumentRequest();
        $argument->setMask($updateMask);
        $argument->setDocument($document);
        
        list ($document, $error) = $client->UpdateDocument($argument)->wait();
        if(!$error->code) {
        	echo "Update document was successful.";
        }
        else {
        	echo "Failed updating document. Error was: ".$error->details;
        }
        
        return $document;
    }
}
