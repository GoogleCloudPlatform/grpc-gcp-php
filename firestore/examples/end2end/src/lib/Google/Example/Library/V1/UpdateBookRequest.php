<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for LibraryService.UpdateBook.
 *
 * Generated from protobuf message <code>google.example.library.v1.UpdateBookRequest</code>
 */
class UpdateBookRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the book to update.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The book to update with. The name must match or be empty.
     *
     * Generated from protobuf field <code>.google.example.library.v1.Book book = 2;</code>
     */
    private $book = null;

    public function __construct() {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct();
    }

    /**
     * The name of the book to update.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the book to update.
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
     * The book to update with. The name must match or be empty.
     *
     * Generated from protobuf field <code>.google.example.library.v1.Book book = 2;</code>
     * @return \Google\Example\Library\V1\Book
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * The book to update with. The name must match or be empty.
     *
     * Generated from protobuf field <code>.google.example.library.v1.Book book = 2;</code>
     * @param \Google\Example\Library\V1\Book $var
     * @return $this
     */
    public function setBook($var)
    {
        GPBUtil::checkMessage($var, \Google\Example\Library\V1\Book::class);
        $this->book = $var;

        return $this;
    }

}

