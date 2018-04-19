<?php
namespace FireStore;

class DatabaseRootNameBuilder
{
    
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
    	return 'projects/'.$this->projectId.'/databases/'.$this->database;
    }
}
