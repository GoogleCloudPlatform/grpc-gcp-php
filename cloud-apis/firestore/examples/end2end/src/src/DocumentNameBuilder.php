<?php
namespace FireStore;

class DocumentNameBuilder
{

    const DOCUMENT_NAME_FORMAT = 'projects/%s/databases/%s/documents/%s/%s';

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
    private $collectionId;

    /**
     *
     * @var string
     */
    private $docId;

    public function __construct($projectId, $database, $collectionId)
    {
        $this->projectId = $projectId;
        $this->database = $database;
        $this->collectionId = $collectionId;
    }

    public function build()
    {
        return sprintf(
            self::DOCUMENT_NAME_FORMAT,
            $this->projectId,
            $this->database,
            $this->collectionId,
            $this->docId
        );
    }

    public function setDocumentId($docId)
    {
        $this->docId = $docId;
    }
}
