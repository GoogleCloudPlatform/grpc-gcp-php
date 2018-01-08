<?php
namespace FireStore\ApiMethods;

use FireStore\DatabaseRootNameBuilder;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\BeginTransactionResponse;
use Google\Cloud\Firestore\V1beta1\DocumentMask;
use Google\Cloud\Firestore\V1beta1\Document;
use Google\Cloud\Firestore\V1beta1\Write;
use Google\Cloud\Firestore\V1beta1\Value;
use Google\Protobuf\Timestamp;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\MapField;
use FireStore\DocumentNameBuilder;
use Google\Cloud\Firestore\V1beta1\CommitRequest;

class Commit
{
    
    public function __invoke(
        FirestoreClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        DocumentNameBuilder $documentNameBuilder,
        BeginTransactionResponse $transaction
    ) {
        
        $now = new \DateTime('now');
        
        $timestamp = new Timestamp();
        $timestamp->setSeconds($now->getTimestamp());
        
        $mask = new DocumentMask();
        $mask->setFieldPaths(['name','age']);
        
        $document = new Document();
        $docId = 'GeneratedByCommit_' . uniqid();
        echo "Generate document with document Id $docId\n";
        
        $documentNameBuilder->setDocumentId($docId);
        $documentName = $documentNameBuilder->build();
        $document->setName($documentName);
        $document->setCreateTime($timestamp);
        $document->setUpdateTime($timestamp);
        
        // Add different fields
        $fields = new MapField(GPBType::STRING, GPBType::MESSAGE, Value::class);
        
        $value = new Value();
        $name = array_rand(array_flip(['john', 'jim', 'james', 'jeremy', 'joe']));
        $value->setStringValue($name);
        $fields['name'] = $value;
        
        $value = new Value();
        $age = rand(20, 80);
        $value->setIntegerValue($age);
        $fields['age'] = $value;
        $document->setFields($fields);
        
        echo "Fields to write:\n";
        var_dump(['name' => $name, 'age' => $age]);
        
        $writes = [];
        $write = new Write();
        $write->setUpdate($document);
        $write->setUpdateMask($mask);
        $writes[] = $write;
        
        $argument = new CommitRequest();
        $argument->setWrites($writes);
        $argument->setDatabase($databaseRootNameBuilder->build());
        $argument->setTransaction($transaction->getTransaction());
        
        list($reply, $error) = $client->Commit($argument)->wait();
        if(!$error->code) {
        	echo "Comitted\n";
        }
        else {
        	echo "!Failed to commit: '.$error->details.'!\n";
        }
    }
}
