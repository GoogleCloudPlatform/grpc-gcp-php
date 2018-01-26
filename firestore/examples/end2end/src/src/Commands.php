<?php
namespace FireStore;

use Google\Cloud\Firestore\V1beta1\FirestoreClient;

/**
 * These are the different commands that can be called from the cli.php
 */
class Commands
{
    /**
     * @var FirestoreClient
     */
    private $firestoreClient;
    
    /**
     * Application Config
     *
     * @var array
     */
    private $config;
    
    /**
     *
     * @var DocumentNameBuilder
     */
    private $documentNameBuilder;
    
    public function __construct()
    {
        /*
         * The code below loads the required application configuration
         */
        $this->config = include __DIR__.'/../config/application.config.php';
        
        /*
         * This is how you can originally create a connection to the remote firebase DB.
         * The options parameters is usually empty.
         *
         * Notice: There is one very important details here which is not mentioned in the documentation
         *         In order to create an instance of the FirestoreClient the classes need to find the
         *         service account credentials JSON file. The location of that file has to be either
         *         under a specific location in the user's home directory or it needs to be
         *         specified in the environment with the key GOOGLE_APPLICATION_CREDENTIALS.
         *         See the config/application.config.php file for details
         *
         */
        $this->firestoreClient = new FirestoreClient($this->config['firestore']['options']);
        
        $this->documentNameBuilder = new DocumentNameBuilder(
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database'],
            $this->config['firestore']['collectionId']
        );
    }

    // [Normal Functions]
    /**
     *
     * @grpc
     */
    private function batchGetDocuments($docIds = [])
    {
        if (count($docIds) == 0) {
            echo "\n    :: Batch Retreive Documents ::\n";
            echo "------------------------------------------\n\n";
        }
        
        if (end($docIds) == '') {
            array_pop($docIds);
        }
        
        $docId = readline("> Enter Document Id (blank when finished): ");
        
        if (trim($docId) || count($docIds) == 0) {
            $docIds[] = $docId;
            return $this->batchGetDocuments($docIds);
        }
        
        $databaseRootNameBuilder = new DatabaseRootNameBuilder(
            $this->firestoreClient,
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        (new ApiMethods\BatchGetDocuments)(
            $this->firestoreClient,
            $databaseRootNameBuilder,
            $this->documentNameBuilder,
            $docIds
        );
    }
    
    /**
     *
     * @grpc
     */
    private function beginTransaction($readWrite = false)
    {
        $databaseRootNameBuilder = new DatabaseRootNameBuilder(
            $this->firestoreClient,
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        return (new ApiMethods\BeginTransaction)(
            $this->firestoreClient,
            $databaseRootNameBuilder,
            $readWrite
        );
    }
    
    /**
     *
     * @grpc
     */
    private function commit()
    {
        $databaseRootNameBuilder = new DatabaseRootNameBuilder(
            $this->firestoreClient,
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        $transaction = $this->beginTransaction(true);
        
        (new ApiMethods\Commit)(
            $this->firestoreClient,
            $databaseRootNameBuilder,
            $this->documentNameBuilder,
            $transaction
        );
    }
    
    /**
     *
     * @grpc
     */
    private function createDocument($docId = null)
    {
        if (!$docId) {
            echo "\n    :: Creating a new Document ::\n";
            echo "------------------------------------------\n\n";
            $docId = readline("> Enter Document Id: ");
            return $this->createDocument($docId);
        }
        
        $parentResourceNameBuilder = new ParentResourceNameBuilder(
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        $collectionId = $this->config['firestore']['collectionId'];
        
        (new ApiMethods\CreateDocument)(
            $this->firestoreClient,
            $parentResourceNameBuilder,
            $collectionId,
            $docId
        );
    }
    
    /**
     *
     * @grpc
     */
    private function deleteDocument($docId = null)
    {
        if (!$docId) {
            echo "\n    :: Deleting a Document ::\n";
            echo "------------------------------------------\n\n";
            $docId = readline("> Enter Document Id: ");
            return $this->deleteDocument($docId);
        }
        
        (new ApiMethods\DeleteDocument)(
            $this->firestoreClient,
            $this->documentNameBuilder,
            $docId
        );
    }
    
    
    /**
     *
     * @grpc
     */
    private function getDocument($docId = null)
    {
        if (!$docId) {
            echo "\n    :: Fetch a Specific Document... ::\n";
            echo "------------------------------------------\n\n";
            $docId = readline("> Enter Document Id: ");
            return $this->getDocument($docId);
        }
        
        (new ApiMethods\GetDocument)($this->firestoreClient, $this->documentNameBuilder, $docId);
    }
    
    /**
     *
     * @grpc
     */
    private function listCollectionIds()
    {
        $parentResourceNameBuilder = new ParentResourceNameBuilder(
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        (new ApiMethods\ListCollectionIds)(
            $this->firestoreClient,
            $parentResourceNameBuilder
        );
    }
    
    
    /**
     *
     * @grpc
     */
    private function listDocuments()
    {
        $collectionId = $this->config['firestore']['collectionId'];
        
        $parentResourceNameBuilder = new ParentResourceNameBuilder(
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        (new ApiMethods\ListDocuments)(
            $this->firestoreClient,
            $parentResourceNameBuilder,
            $collectionId
        );
    }
    
    /**
     *
     * @grpc
     */
    private function rollback()
    {
        $databaseRootNameBuilder = new DatabaseRootNameBuilder(
            $this->firestoreClient,
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        $transaction = $this->beginTransaction();
        
        (new ApiMethods\Rollback)(
            $this->firestoreClient,
            $databaseRootNameBuilder,
            $transaction
        );
    }
    
    /**
     *
     * @grpc
     */
    private function runQuery()
    {
        echo "Run Query in the format of 'SELECT name, age FROM users WHERE age=20 AND name=\"john\"'\n\n";
        $prompt = <<<'EOF'
select;Select Fields (multiple fields seperated by comma): 
where;Where clause: 
EOF;

        $userInput = [];
        foreach ($this->getInputParser($prompt)() as $key => $value) {
            $userInput[$key] = $value;
        }
        
        // build arrays for SELECT and WHERE from user input
        $select = array_map('trim', explode(',', $userInput['select']));
        
        parse_str(str_ireplace([' and ', ' '], ['&', ''], $userInput['where']), $where);
        $where = array_map(
            function ($value) {
                $value = trim($value, ' \'"');
                if (is_numeric($value)) {
                    return $value + 0;
                }
                return $value;
            },
            $where
        );
        
        $collectionId = $this->config['firestore']['collectionId'];
        $queryBuilder = new StructuredQueryBuilder($collectionId, $select, $where);
        
        $parentResourceNameBuilder = new ParentResourceNameBuilder(
            $this->config['firestore']['projectId'],
            $this->config['firestore']['database']
        );
        
        (new ApiMethods\RunQuery)(
            $this->firestoreClient,
            $parentResourceNameBuilder,
            $queryBuilder->build()
        );
    }
    
    /**
     *
     * @grpc
     */
    private function updateDocument()
    {
        echo "\n    :: Update a Document... ::\n";
        echo "------------------------------------------\n\n";
        
        $prompt = <<<'EOF'
docId;Enter Document Id: 
fieldToUpdate;Enter Field Name (String field, new or existing): 
newValue;Enter Field Value: 
EOF;
        
        $userInput = [];
        foreach ($this->getInputParser($prompt)() as $key => $value) {
            $userInput[$key] = $value;
        }
        
        $document = (new ApiMethods\UpdateDocument)(
            $this->firestoreClient,
            $this->documentNameBuilder,
            $userInput['docId'],
            $userInput['fieldToUpdate'],
            $userInput['newValue']
        );
        
        $this->getDocument($userInput['docId']);
    }
    
    // [ Admin Functions ]
    /**
     * @grpc
     * @admin
     */
    private function createIndex()
    {
        // Unable to find PHP documentation for those methods
        throw new \Exception("PHP classes are not existing for this functionality");
    }
    
    /**
     * @grpc
     * @admin
     */
    private function deleteIndex()
    {
        // Unable to find PHP documentation for those methods
        throw new \Exception("PHP classes are not existing for this functionality");
    }
    
    /**
     * @grpc
     * @admin
     */
    private function getIndex()
    {
        // Unable to find PHP documentation for those methods
        throw new \Exception("PHP classes are not existing for this functionality");
    }
    
    /**
     * @grpc
     * @admin
     */
    private function listIndex()
    {
        // Unable to find PHP documentation for those methods
        throw new \Exception("PHP classes are not existing for this functionality");
    }
    
    /**
     * @grpc
     * @admin
     */
    private function progress()
    {
        // Unable to find PHP documentation for those methods
        throw new \Exception("PHP classes are not existing for this functionality");
    }
    
    // Utility methods
    
    public function usage()
    {
        print("     Google Firestore RPC Menu \n\n");
        printf("%s\n", str_pad('-', 79, "-"));
        
        $options = $this->getOptions();

        foreach ($options as $idx => $option) {
            printf(
                "%'. 2d | %s %s\n",
                $idx + 1,
                str_pad(strtolower($option), 25, "."),
                ucfirst($option)
            );
        }
        
        $offset = count($options);
        
        print("\n     Firestore Admin RPC's         \n\n");
        printf("%s\n", str_pad('-', 79, "-"));
        $options = $this->getOptions(true);
        
        foreach ($options as $idx => $option) {
            printf(
                "%'. 2d | %s %s\n",
                $idx + $offset + 1,
                str_pad(strtolower($option), 25, "."),
                ucfirst($option)
            );
        }
        
        print("\n");
    }
    
    private function getInputParser($prompt)
    {
        return function () use ($prompt) {
            foreach (explode("\n", $prompt) as $line) {
                list($key, $text) = explode(';', $line);
                $value = readline("> $text");
                echo "\n";
                yield $key => $value;
            }
        };
    }
    
    public function run($idx)
    {
        $allOptions = $this->getOptions() + $this->getOptions(true);
        if (!isset($allOptions[$idx - 1])) {
            return $this->usage();
        }
        
        return call_user_func(array($this, $allOptions[$idx - 1]));
    }
    
    private function getOptions($admin = false)
    {
        $options = [];
        
        $reflection = new \ReflectionClass($this);
        $methods = $reflection->getMethods();
        foreach ($methods as $method) {
            $comment = $method->getDocComment();
            if (!preg_match('/@grpc\s*/i', $comment)) {
                continue;
            }
            
            if ($admin != preg_match('/@admin\s*/i', $comment)) {
                continue;
            }
            
            $options[] = $method->getName();
        }
            
        
        return $options;
    }
    
    public function __destruct()
    {
        $this->firestoreClient->close();
    }
}
