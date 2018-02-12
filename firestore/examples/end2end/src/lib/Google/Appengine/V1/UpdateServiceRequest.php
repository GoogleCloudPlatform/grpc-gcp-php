<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `Services.UpdateService`.
 *
 * Generated from protobuf message <code>google.appengine.v1.UpdateServiceRequest</code>
 */
class UpdateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource to update. Example: `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A Service resource containing the updated service. Only fields set in the
     * field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Service service = 2;</code>
     */
    private $service = null;
    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;
    /**
     * Set to `true` to gradually shift traffic from one version to another
     * single version. By default, traffic is shifted immediately.
     * For gradual traffic migration, the target version
     * must be located within instances that are configured for both
     * [warmup requests](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#inboundservicetype)
     * and
     * [automatic scaling](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#automaticscaling).
     * You must specify the
     * [`shardBy`](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services#shardby)
     * field in the Service resource. Gradual traffic migration is not
     * supported in the App Engine flexible environment. For examples, see
     * [Migrating and Splitting Traffic](https://cloud.google.com/appengine/docs/admin-api/migrating-splitting-traffic).
     *
     * Generated from protobuf field <code>bool migrate_traffic = 4;</code>
     */
    private $migrate_traffic = false;

    public function __construct() {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct();
    }

    /**
     * Name of the resource to update. Example: `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource to update. Example: `apps/myapp/services/default`.
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
     * A Service resource containing the updated service. Only fields set in the
     * field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Service service = 2;</code>
     * @return \Google\Appengine\V1\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A Service resource containing the updated service. Only fields set in the
     * field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Service service = 2;</code>
     * @param \Google\Appengine\V1\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Appengine\V1\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Set to `true` to gradually shift traffic from one version to another
     * single version. By default, traffic is shifted immediately.
     * For gradual traffic migration, the target version
     * must be located within instances that are configured for both
     * [warmup requests](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#inboundservicetype)
     * and
     * [automatic scaling](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#automaticscaling).
     * You must specify the
     * [`shardBy`](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services#shardby)
     * field in the Service resource. Gradual traffic migration is not
     * supported in the App Engine flexible environment. For examples, see
     * [Migrating and Splitting Traffic](https://cloud.google.com/appengine/docs/admin-api/migrating-splitting-traffic).
     *
     * Generated from protobuf field <code>bool migrate_traffic = 4;</code>
     * @return bool
     */
    public function getMigrateTraffic()
    {
        return $this->migrate_traffic;
    }

    /**
     * Set to `true` to gradually shift traffic from one version to another
     * single version. By default, traffic is shifted immediately.
     * For gradual traffic migration, the target version
     * must be located within instances that are configured for both
     * [warmup requests](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#inboundservicetype)
     * and
     * [automatic scaling](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services.versions#automaticscaling).
     * You must specify the
     * [`shardBy`](https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.services#shardby)
     * field in the Service resource. Gradual traffic migration is not
     * supported in the App Engine flexible environment. For examples, see
     * [Migrating and Splitting Traffic](https://cloud.google.com/appengine/docs/admin-api/migrating-splitting-traffic).
     *
     * Generated from protobuf field <code>bool migrate_traffic = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setMigrateTraffic($var)
    {
        GPBUtil::checkBool($var);
        $this->migrate_traffic = $var;

        return $this;
    }

}

