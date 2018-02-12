<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1beta1/datastore_admin.proto

namespace Google\Datastore\Admin\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [google.datastore.admin.v1beta1.DatastoreAdmin.ExportEntities][google.datastore.admin.v1beta1.DatastoreAdmin.ExportEntities].
 *
 * Generated from protobuf message <code>google.datastore.admin.v1beta1.ExportEntitiesResponse</code>
 */
class ExportEntitiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Location of the output metadata file. This can be used to begin an import
     * into Cloud Datastore (this project or another project). See
     * [google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url][google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url].
     * Only present if the operation completed successfully.
     *
     * Generated from protobuf field <code>string output_url = 1;</code>
     */
    private $output_url = '';

    public function __construct() {
        \GPBMetadata\Google\Datastore\Admin\V1Beta1\DatastoreAdmin::initOnce();
        parent::__construct();
    }

    /**
     * Location of the output metadata file. This can be used to begin an import
     * into Cloud Datastore (this project or another project). See
     * [google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url][google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url].
     * Only present if the operation completed successfully.
     *
     * Generated from protobuf field <code>string output_url = 1;</code>
     * @return string
     */
    public function getOutputUrl()
    {
        return $this->output_url;
    }

    /**
     * Location of the output metadata file. This can be used to begin an import
     * into Cloud Datastore (this project or another project). See
     * [google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url][google.datastore.admin.v1beta1.ImportEntitiesRequest.input_url].
     * Only present if the operation completed successfully.
     *
     * Generated from protobuf field <code>string output_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_url = $var;

        return $this;
    }

}

