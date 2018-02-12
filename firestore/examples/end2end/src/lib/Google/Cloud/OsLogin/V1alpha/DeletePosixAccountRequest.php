<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1alpha/oslogin.proto

namespace Google\Cloud\OsLogin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for deleting a POSIX account entry.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1alpha.DeletePosixAccountRequest</code>
 */
class DeletePosixAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A reference to the POSIX account to update. POSIX accounts are identified
     * by the project ID they are associated with. A reference to the POSIX
     * account is in format `users/{user}/projects/{project}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Oslogin\V1Alpha\Oslogin::initOnce();
        parent::__construct();
    }

    /**
     * A reference to the POSIX account to update. POSIX accounts are identified
     * by the project ID they are associated with. A reference to the POSIX
     * account is in format `users/{user}/projects/{project}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A reference to the POSIX account to update. POSIX accounts are identified
     * by the project ID they are associated with. A reference to the POSIX
     * account is in format `users/{user}/projects/{project}`.
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

}

