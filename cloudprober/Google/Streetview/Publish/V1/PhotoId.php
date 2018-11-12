<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/resources.proto

namespace Google\Streetview\Publish\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifier for a photo.
 *
 * Generated from protobuf message <code>google.streetview.publish.v1.PhotoId</code>
 */
class PhotoId extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A base64 encoded identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. A base64 encoded identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Streetview\Publish\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A base64 encoded identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. A base64 encoded identifier.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}
