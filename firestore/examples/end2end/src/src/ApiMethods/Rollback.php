<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\BeginTransactionResponse;
use FireStore\DatabaseRootNameBuilder;
use Google\Cloud\Firestore\V1beta1\RollbackRequest;

class Rollback
{
    
    public function __invoke(
        FirestoreClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        BeginTransactionResponse $transaction
    ) {
        echo "Rollback started\n";
        
        $argument = new RollbackRequest();
        $argument->setTransaction($transaction->getTransaction());
        $argument->setDatabase( $databaseRootNameBuilder->build());
        list($transaction, $error) = $client->Rollback($argument)->wait();
        if(!$error->code) {
        	echo "Rollback done\n";
        }
        else {
        	echo "!Failed to rollback transaction: '.$error->details.'!\n";
        }
    }
}
