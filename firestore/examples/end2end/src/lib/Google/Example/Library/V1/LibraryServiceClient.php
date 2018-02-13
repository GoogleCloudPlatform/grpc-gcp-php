<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright (c) 2015, Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Example\Library\V1;

/**
 * This API represents a simple digital library.  It lets you manage Shelf
 * resources and Book resources in the library. It defines the following
 * resource model:
 *
 * - The API has a collection of [Shelf][google.example.library.v1.Shelf]
 *   resources, named `shelves/*`
 *
 * - Each Shelf has a collection of [Book][google.example.library.v1.Book]
 *   resources, named `shelves/&#42;/books/*`
 */
class LibraryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a shelf, and returns the new Shelf.
     * @param \Google\Example\Library\V1\CreateShelfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateShelf(\Google\Example\Library\V1\CreateShelfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/CreateShelf',
        $argument,
        ['\Google\Example\Library\V1\Shelf', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a shelf. Returns NOT_FOUND if the shelf does not exist.
     * @param \Google\Example\Library\V1\GetShelfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetShelf(\Google\Example\Library\V1\GetShelfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/GetShelf',
        $argument,
        ['\Google\Example\Library\V1\Shelf', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists shelves. The order is unspecified but deterministic. Newly created
     * shelves will not necessarily be added to the end of this list.
     * @param \Google\Example\Library\V1\ListShelvesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListShelves(\Google\Example\Library\V1\ListShelvesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/ListShelves',
        $argument,
        ['\Google\Example\Library\V1\ListShelvesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a shelf. Returns NOT_FOUND if the shelf does not exist.
     * @param \Google\Example\Library\V1\DeleteShelfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteShelf(\Google\Example\Library\V1\DeleteShelfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/DeleteShelf',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Merges two shelves by adding all books from the shelf named
     * `other_shelf_name` to shelf `name`, and deletes
     * `other_shelf_name`. Returns the updated shelf.
     * The book ids of the moved books may not be the same as the original books.
     *
     * Returns NOT_FOUND if either shelf does not exist.
     * This call is a no-op if the specified shelves are the same.
     * @param \Google\Example\Library\V1\MergeShelvesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MergeShelves(\Google\Example\Library\V1\MergeShelvesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/MergeShelves',
        $argument,
        ['\Google\Example\Library\V1\Shelf', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a book, and returns the new Book.
     * @param \Google\Example\Library\V1\CreateBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateBook(\Google\Example\Library\V1\CreateBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/CreateBook',
        $argument,
        ['\Google\Example\Library\V1\Book', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a book. Returns NOT_FOUND if the book does not exist.
     * @param \Google\Example\Library\V1\GetBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBook(\Google\Example\Library\V1\GetBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/GetBook',
        $argument,
        ['\Google\Example\Library\V1\Book', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists books in a shelf. The order is unspecified but deterministic. Newly
     * created books will not necessarily be added to the end of this list.
     * Returns NOT_FOUND if the shelf does not exist.
     * @param \Google\Example\Library\V1\ListBooksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListBooks(\Google\Example\Library\V1\ListBooksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/ListBooks',
        $argument,
        ['\Google\Example\Library\V1\ListBooksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a book. Returns NOT_FOUND if the book does not exist.
     * @param \Google\Example\Library\V1\DeleteBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteBook(\Google\Example\Library\V1\DeleteBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/DeleteBook',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a book. Returns INVALID_ARGUMENT if the name of the book
     * is non-empty and does equal the previous name.
     * @param \Google\Example\Library\V1\UpdateBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateBook(\Google\Example\Library\V1\UpdateBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/UpdateBook',
        $argument,
        ['\Google\Example\Library\V1\Book', 'decode'],
        $metadata, $options);
    }

    /**
     * Moves a book to another shelf, and returns the new book. The book
     * id of the new book may not be the same as the original book.
     * @param \Google\Example\Library\V1\MoveBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MoveBook(\Google\Example\Library\V1\MoveBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.example.library.v1.LibraryService/MoveBook',
        $argument,
        ['\Google\Example\Library\V1\Book', 'decode'],
        $metadata, $options);
    }

}
