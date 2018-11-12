<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace Google\Devtools\Sourcerepo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListRepos.
 *
 * Generated from protobuf message <code>google.devtools.sourcerepo.v1.ListReposRequest</code>
 */
class ListReposRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project ID whose repos should be listed. Values are of the form
     * `projects/<project>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The project ID whose repos should be listed. Values are of the form
     *           `projects/<project>`.
     *     @type int $page_size
     *           Maximum number of repositories to return; between 1 and 500.
     *           If not set or zero, defaults to 100 at the server.
     *     @type string $page_token
     *           Resume listing repositories where a prior ListReposResponse
     *           left off. This is an opaque token that must be obtained from
     *           a recent, prior ListReposResponse's next_page_token field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Sourcerepo\V1\Sourcerepo::initOnce();
        parent::__construct($data);
    }

    /**
     * The project ID whose repos should be listed. Values are of the form
     * `projects/<project>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The project ID whose repos should be listed. Values are of the form
     * `projects/<project>`.
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
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of repositories to return; between 1 and 500.
     * If not set or zero, defaults to 100 at the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Resume listing repositories where a prior ListReposResponse
     * left off. This is an opaque token that must be obtained from
     * a recent, prior ListReposResponse's next_page_token field.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
