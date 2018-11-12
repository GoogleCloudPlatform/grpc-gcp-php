<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NetworkConfig reports the relative names of network & subnetwork.
 *
 * Generated from protobuf message <code>google.container.v1beta1.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1beta1.NetworkConfig.network](/compute/docs/networks-and-firewalls#networks) to which
     * the cluster is connected.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     */
    private $network = '';
    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](/compute/docs/vpc) to which the cluster is connected.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     */
    private $subnetwork = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Output only. The relative name of the Google Compute Engine
     *           [network][google.container.v1beta1.NetworkConfig.network](/compute/docs/networks-and-firewalls#networks) to which
     *           the cluster is connected.
     *           Example: projects/my-project/global/networks/my-network
     *     @type string $subnetwork
     *           Output only. The relative name of the Google Compute Engine
     *           [subnetwork](/compute/docs/vpc) to which the cluster is connected.
     *           Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1beta1.NetworkConfig.network](/compute/docs/networks-and-firewalls#networks) to which
     * the cluster is connected.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1beta1.NetworkConfig.network](/compute/docs/networks-and-firewalls#networks) to which
     * the cluster is connected.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](/compute/docs/vpc) to which the cluster is connected.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](/compute/docs/vpc) to which the cluster is connected.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

}
