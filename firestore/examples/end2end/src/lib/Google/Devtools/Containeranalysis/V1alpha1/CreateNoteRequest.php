<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to insert a new note
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.CreateNoteRequest</code>
 */
class CreateNoteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the project.
     * Should be of the form "providers/{provider_id}".
     * &#64;Deprecated
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * This field contains the project Id for example:
     * "project/{project_id}
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     */
    private $parent = '';
    /**
     * The ID to use for this note.
     *
     * Generated from protobuf field <code>string note_id = 2;</code>
     */
    private $note_id = '';
    /**
     * The Note to be inserted
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note note = 3;</code>
     */
    private $note = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Containeranalysis::initOnce();
        parent::__construct();
    }

    /**
     * The name of the project.
     * Should be of the form "providers/{provider_id}".
     * &#64;Deprecated
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the project.
     * Should be of the form "providers/{provider_id}".
     * &#64;Deprecated
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * This field contains the project Id for example:
     * "project/{project_id}
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * This field contains the project Id for example:
     * "project/{project_id}
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The ID to use for this note.
     *
     * Generated from protobuf field <code>string note_id = 2;</code>
     * @return string
     */
    public function getNoteId()
    {
        return $this->note_id;
    }

    /**
     * The ID to use for this note.
     *
     * Generated from protobuf field <code>string note_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNoteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->note_id = $var;

        return $this;
    }

    /**
     * The Note to be inserted
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note note = 3;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * The Note to be inserted
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note note = 3;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\Note $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\Note::class);
        $this->note = $var;

        return $this;
    }

}

