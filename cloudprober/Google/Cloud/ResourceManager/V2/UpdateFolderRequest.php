<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v2/folders.proto

namespace Google\Cloud\ResourceManager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for updating a folder's display name.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v2.UpdateFolderRequest</code>
 */
class UpdateFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The new definition of the Folder. It must include a
     * a `name` and `display_name` field. The other fields
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v2.Folder folder = 1;</code>
     */
    private $folder = null;
    /**
     * Fields to be updated.
     * Only the `display_name` can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceManager\V2\Folder $folder
     *           The new definition of the Folder. It must include a
     *           a `name` and `display_name` field. The other fields
     *           will be ignored.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Fields to be updated.
     *           Only the `display_name` can be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V2\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * The new definition of the Folder. It must include a
     * a `name` and `display_name` field. The other fields
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v2.Folder folder = 1;</code>
     * @return \Google\Cloud\ResourceManager\V2\Folder
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * The new definition of the Folder. It must include a
     * a `name` and `display_name` field. The other fields
     * will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v2.Folder folder = 1;</code>
     * @param \Google\Cloud\ResourceManager\V2\Folder $var
     * @return $this
     */
    public function setFolder($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ResourceManager\V2\Folder::class);
        $this->folder = $var;

        return $this;
    }

    /**
     * Fields to be updated.
     * Only the `display_name` can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Fields to be updated.
     * Only the `display_name` can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
