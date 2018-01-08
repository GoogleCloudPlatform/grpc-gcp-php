<?php
namespace FireStore\ApiMethods;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Google\Cloud\Firestore\V1beta1\BeginTransactionResponse;
use FireStore\DatabaseRootNameBuilder;

class Rollback
{
    
    public function __invoke(
        FirestoreClient $client,
        DatabaseRootNameBuilder $databaseRootNameBuilder,
        BeginTransactionResponse $transaction
    ) {
        echo "Rollback started\n";
        $response = $client->rollback(
            $databaseRootNameBuilder->build(),
            $transaction->getTransaction()
        );
        echo "Rollback done\n";
    }
}
