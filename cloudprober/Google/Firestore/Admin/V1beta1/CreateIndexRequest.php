<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1beta1/firestore_admin.proto

namespace Google\Firestore\Admin\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [FirestoreAdmin.CreateIndex][google.firestore.admin.v1beta1.FirestoreAdmin.CreateIndex].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1beta1.CreateIndexRequest</code>
 */
class CreateIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the database this index will apply to. For example:
     * `projects/{project_id}/databases/{database_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The index to create. The name and state fields are output only and will be
     * ignored. Certain single field indexes cannot be created or deleted.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1beta1.Index index = 2;</code>
     */
    private $index = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The name of the database this index will apply to. For example:
     *           `projects/{project_id}/databases/{database_id}`
     *     @type \Google\Firestore\Admin\V1beta1\Index $index
     *           The index to create. The name and state fields are output only and will be
     *           ignored. Certain single field indexes cannot be created or deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1Beta1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the database this index will apply to. For example:
     * `projects/{project_id}/databases/{database_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the database this index will apply to. For example:
     * `projects/{project_id}/databases/{database_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The index to create. The name and state fields are output only and will be
     * ignored. Certain single field indexes cannot be created or deleted.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1beta1.Index index = 2;</code>
     * @return \Google\Firestore\Admin\V1beta1\Index
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The index to create. The name and state fields are output only and will be
     * ignored. Certain single field indexes cannot be created or deleted.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1beta1.Index index = 2;</code>
     * @param \Google\Firestore\Admin\V1beta1\Index $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\Admin\V1beta1\Index::class);
        $this->index = $var;

        return $this;
    }

}
