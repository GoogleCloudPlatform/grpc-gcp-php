#!/usr/bin/env php

<?php

require_once __DIR__ . '/vendor/autoload.php';

use FireStore\ApiMethods\BatchGetDocuments;
use FireStore\ApiMethods\BeginTransaction;
use FireStore\ApiMethods\Commit;
use FireStore\ApiMethods\CreateDocument;
use FireStore\ApiMethods\DeleteDocument;
use FireStore\ApiMethods\GetDocument;
use FireStore\ApiMethods\ListCollectionIds;
use FireStore\ApiMethods\ListDocuments;
use FireStore\ApiMethods\Rollback;
use FireStore\ApiMethods\RunQuery;
use FireStore\ApiMethods\UpdateDocument;
use FireStore\DatabaseRootNameBuilder;
use FireStore\DocumentNameBuilder;
use FireStore\ParentResourceNameBuilder;
use FireStore\StructuredQueryBuilder;
use Google\Auth\ApplicationDefaultCredentials;
use Google\Cloud\Firestore\V1beta1\FirestoreClient;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

$apis = [
    'BatchGetDocuments',
    'BeginTransaction',
    'Commit',
    'CreateDocument',
    'DeleteDocument',
    'GetDocument',
    'ListCollectionIds',
    'ListDocuments',
    'Rollback',
    'RunQuery',
    'UpdateDocument'
];

(new class('firestore', '1.0.0') extends Application {
    protected function getDefaultInputDefinition()
    {
        return new InputDefinition(array(
            new InputArgument('command', InputArgument::REQUIRED, 'The command to execute'),
            
            new InputOption('--help', '-h', InputOption::VALUE_NONE, 'Display this help message'),
        ));
    }
    
    public function renderException(\Exception $e, OutputInterface $output)
    {
        parent::renderException($e, $output);
        if (in_array(get_class($e), ['BadFunctionCallException', 'InvalidArgumentException'])) {
            $input = new \Symfony\Component\Console\Input\ArrayInput(['--help']);
            $this->doRun($input, $output);
        }
    }
})
    ->register('firestore')
    
    ->addOption('api', 'a', InputOption::VALUE_REQUIRED, "Available Api Calls are:\n" . join("\n", $apis))
    ->addOption('projectid', 'p', InputOption::VALUE_REQUIRED, "Project Id")
    ->addOption('databaseid', 'd', InputOption::VALUE_REQUIRED, 'Database Id, e.g. "(default)"')
    ->addOption('collectionid', 'c', InputOption::VALUE_REQUIRED, "Collection Id")
    ->addOption('field', 'f', InputOption::VALUE_REQUIRED, "Field")
    ->addOption('value', 'val', InputOption::VALUE_REQUIRED, "Value")
    ->addOption('select', 's', InputOption::VALUE_REQUIRED, "Select Field, only for RunQuery API")
    ->addOption('documentid', ['x', 'doc'], InputOption::VALUE_REQUIRED, "DocumentId")
    ->addOption('interactive', 'i', InputOption::VALUE_OPTIONAL, "Run interactive mode")
    
    ->addUsage('--interactive true --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID> // Interactive mode is started')
    ->addUsage('--api BatchGetDocuments -x <COMMA_SEPERATED_DOCUMENT_IDS> --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api BeginTransaction --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID>')
    ->addUsage('--api Commit --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api CreateDocument -x <DOCUMENT_ID> --databaseid <DATABASE_ID> --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api DeleteDocument -x <DOCUMENT_ID> --databaseid <DATABASE_ID> --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api GetDocument -x <DOCUMENT_ID> --databaseid <DATABASE_ID> --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api ListCollectionIds --databaseid <DATABASE_ID> --projectid <PROJECT_ID>')
    ->addUsage('--api ListDocuments --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api Rollback --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID>')
    ->addUsage('--api RunQuery --select <SELECT_FIELD> --field=<WHERE_CONDITION_FIELD> --value=<WHERE_CONDITION_VALUE> --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    ->addUsage('--api UpdateDocument -x <DOCUMENT_ID> --field=<FIELD_TO_UPDATE> --value=<VALUE_TO_UPDATE> --databaseid "<DATABASE_ID>" --projectid <PROJECT_ID> --collectionid <COLLECTION_ID>')
    
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($apis) {
        $api = $input->getOption('api');
        
        $projectid = $input->getOption('projectid');
        if (!$projectid) {
            throw new \InvalidArgumentException('projectid is mandatory');
        }
        $databaseId = $input->getOption('databaseid');
        if (!$databaseId) {
            throw new \InvalidArgumentException('databaseid is mandatory');
        }
        $collectionid = $input->getOption('collectionid');
        if (!$collectionid && !in_array($api, ['BeginTransaction', 'ListCollectionIds', 'Rollback'])) {
            throw new \InvalidArgumentException('collectionid is mandatory');
        }
        
        if ($input->getOption('interactive') == 'true') {
            define('PROJECT_ID', $input->getOption('projectid'));
            define('DATABASE_ID', $input->getOption('databaseid'));
            define('COLLECTION_ID', $input->getOption('collectionid'));
            require 'bin/interactive.php';
            return;
        }
        
        if (!in_array($api, $apis)) {
            throw new \BadFunctionCallException("Api $api not available");
        }
        
        $host = "firestore.googleapis.com";
        $credentials = \Grpc\ChannelCredentials::createSsl();
        
        // WARNING: the environment variable "GOOGLE_APPLICATION_CREDENTIALS" needs to be set
        $auth = ApplicationDefaultCredentials::getCredentials();
        $opts = [
        		'credentials' => $credentials,
        		'update_metadata' => $auth->getUpdateMetadataFunc(),
        ];
        
        $firestoreClient = new FirestoreClient($host, $opts);
        
        if ($collectionid) {
            $documentNameBuilder = new DocumentNameBuilder(
                $projectid,
                $databaseId,
                $collectionid
            );
        }
        
        $databaseRootNameBuilder = new DatabaseRootNameBuilder(
            $firestoreClient,
            $projectid,
            $databaseId
        );
        
        $parentResourceNameBuilder = new ParentResourceNameBuilder(
            $projectid,
            $databaseId
        );
        
        switch ($api) {
            case 'BatchGetDocuments':
                (new BatchGetDocuments)(
                    $firestoreClient,
                    $databaseRootNameBuilder,
                    $documentNameBuilder,
                    array_map('trim', explode(',', $input->getOption('documentid')))
                );
                break;
                
            case 'BeginTransaction':
                (new BeginTransaction)(
                    $firestoreClient,
                    $databaseRootNameBuilder
                );
                break;
                
            case 'Commit':
                $transaction = (new BeginTransaction)(
                    $firestoreClient,
                    $databaseRootNameBuilder,
                    true
                );
                
                (new Commit)(
                    $firestoreClient,
                    $databaseRootNameBuilder,
                    $documentNameBuilder,
                    $transaction
                );
                break;
                
            case 'CreateDocument':
                (new CreateDocument)(
                    $firestoreClient,
                    $parentResourceNameBuilder,
                    $collectionid,
                    $input->getOption('documentid')
                );
                break;
                
            case 'DeleteDocument':
                (new DeleteDocument)(
                    $firestoreClient,
                    $documentNameBuilder,
                    $input->getOption('documentid')
                );
                break;
                
            case 'GetDocument':
                (new GetDocument)(
                    $firestoreClient,
                    $documentNameBuilder,
                    $input->getOption('documentid')
                );
                break;
                
            case 'ListCollectionIds':
                (new ListCollectionIds)(
                    $firestoreClient,
                    $parentResourceNameBuilder
                );
                break;
                
            case 'ListDocuments':
                (new ListDocuments)(
                    $firestoreClient,
                    $parentResourceNameBuilder,
                    $collectionid
                );
                break;
                
            case 'Rollback':
                $transaction = (new BeginTransaction)(
                    $firestoreClient,
                    $databaseRootNameBuilder,
                    true
                );
                
                (new Rollback)(
                    $firestoreClient,
                    $databaseRootNameBuilder,
                    $transaction
                );
                break;
                
            case 'RunQuery':
                $select = [$input->getOption('select')];
                $where = [$input->getOption('field') => $input->getOption('value')];
                
                $queryBuilder = new StructuredQueryBuilder($collectionid, $select, $where);
                
                (new RunQuery)(
                    $firestoreClient,
                    $parentResourceNameBuilder,
                    $queryBuilder->build()
                );
                break;
                
            case 'UpdateDocument':
                (new UpdateDocument)(
                    $firestoreClient,
                    $documentNameBuilder,
                    $input->getOption('documentid'),
                    $input->getOption('field'),
                    $input->getOption('value')
                );
                break;
                
            default:
                throw new \Exception("Api call $api not available");
        }
    })
    ->getApplication()
    ->setDefaultCommand('firestore', true)
    ->run();
