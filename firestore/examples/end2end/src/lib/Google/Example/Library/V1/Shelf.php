<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Shelf contains a collection of books with a theme.
 *
 * Generated from protobuf message <code>google.example.library.v1.Shelf</code>
 */
class Shelf extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the shelf.
     * Shelf names have the form `shelves/{shelf_id}`.
     * The name is ignored when creating a shelf.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The theme of the shelf
     *
     * Generated from protobuf field <code>string theme = 2;</code>
     */
    private $theme = '';

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * The resource name of the shelf.
     * Shelf names have the form `shelves/{shelf_id}`.
     * The name is ignored when creating a shelf.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the shelf.
     * Shelf names have the form `shelves/{shelf_id}`.
     * The name is ignored when creating a shelf.
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
     * The theme of the shelf
     *
     * Generated from protobuf field <code>string theme = 2;</code>
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * The theme of the shelf
     *
     * Generated from protobuf field <code>string theme = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTheme($var)
    {
        GPBUtil::checkString($var, True);
        $this->theme = $var;

        return $this;
    }

}

