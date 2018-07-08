<?php
namespace FireStore;

class ParentResourceNameBuilder
{

    const PARENT_RESOURCE_NAME_FORMAT = 'projects/%s/databases/%s/documents';

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

    public function __construct($projectId, $database)
    {
        $this->projectId = $projectId;
        $this->database = $database;
    }

    public function build()
    {
        return sprintf(
            self::PARENT_RESOURCE_NAME_FORMAT,
            $this->projectId,
            $this->database
        );
    }
}
