<?php
namespace FireStore;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;

class DatabaseRootNameBuilder
{
    
    /**
     *
     * @var FirestoreClient
     */
    private $firestoreClient;
    
    /**
     *
     * @var string
     */
    private $projectId;

    /**
     *
     * @var string
     */
    private $database;

    /**
     *
     * @var string
     */
    private $docId;

    public function __construct(FirestoreClient $client, $projectId, $database)
    {
        $this->firestoreClient = $client;
        $this->projectId = $projectId;
        $this->database = $database;
    }

    public function build()
    {
    	return 'projects/'.$this->projectId.'/databases/'.$this->database;
    }
}
