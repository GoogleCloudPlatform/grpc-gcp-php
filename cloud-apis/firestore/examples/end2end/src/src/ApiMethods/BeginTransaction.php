<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use FireStore\DatabaseRootNameBuilder;
use Google\Protobuf\Timestamp;
use Google\Cloud\Firestore\V1beta1\TransactionOptions_ReadOnly;
use Google\Cloud\Firestore\V1beta1\TransactionOptions;
use Google\Cloud\Firestore\V1beta1\TransactionOptions_ReadWrite;
use Google\Cloud\Firestore\V1beta1\BeginTransactionRequest;

class BeginTransaction
{
    
    public function __invoke(
        FirestoreClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        $readWrite = false
    ) {
        // start a transaction
        $now = new \DateTime('now');
        
        $timestamp = new Timestamp();
        $timestamp->setSeconds($now->getTimestamp());
        // $timestamp->setNanos($now->format('u')); // using precision higher than microseconds was rejected
        
        if (!$readWrite) {
            $readOnlyOption = new TransactionOptions_ReadOnly();
            $readOnlyOption->setReadTime($timestamp);
            
            $options = new TransactionOptions();
            $options->setReadOnly($readOnlyOption);
            
            echo "Read ";
        } else {
            $readWriteOption = new TransactionOptions_ReadWrite();
            
            $options = new TransactionOptions();
            $options->setReadWrite($readWriteOption);
            
            echo "Read/Write ";
        }
        echo "Transaction started\n";
        
        $argument = new BeginTransactionRequest();
        $argument->setDatabase($databaseRootNameBuilder->build());
        $argument->setOptions($options);
        
        list($transaction, $error) = $client->BeginTransaction($argument)->wait();
        
        return $transaction;
    }
}
