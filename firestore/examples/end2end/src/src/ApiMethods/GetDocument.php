<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\DocumentNameBuilder;
use Google\Cloud\Firestore\V1beta1\GetDocumentRequest;

class GetDocument
{
    
    public function __invoke(FirestoreClient $client, DocumentNameBuilder $documentNameBuilder, $docId)
    {
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
        
        echo "Document Name: $documentName";
        echo "\nCreated: " . date(DATE_RFC822, $document->getCreateTime()->getSeconds());
        echo "\nUpdated: " . date(DATE_RFC822, $document->getUpdateTime()->getSeconds());
        
        $fields = $document->getFields();
        $i = 0;
        echo "\n\nDocument Fields\n";
        foreach ($fields as $name => $value) {
            $i++;
            echo "Field $i: ";
            switch ($value->getValueType()) {
                case 'integer_value':
                    echo "$name => ".$value->getIntegerValue()."\n";
                    break;
                default:
                    echo "$name => ".$value->getStringValue()."\n";
            }
        }
    }
}
