<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
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
namespace Google\Bigtable\Admin\Cluster\V1;

/**
 * Service for managing zonal Cloud Bigtable resources.
 */
class BigtableClusterServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the supported zones for the given project.
     * @param \Google\Bigtable\Admin\Cluster\V1\ListZonesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListZones(\Google\Bigtable\Admin\Cluster\V1\ListZonesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/ListZones',
        $argument,
        ['\Google\Bigtable\Admin\Cluster\V1\ListZonesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets information about a particular cluster.
     * @param \Google\Bigtable\Admin\Cluster\V1\GetClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCluster(\Google\Bigtable\Admin\Cluster\V1\GetClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/GetCluster',
        $argument,
        ['\Google\Bigtable\Admin\Cluster\V1\Cluster', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all clusters in the given project, along with any zones for which
     * cluster information could not be retrieved.
     * @param \Google\Bigtable\Admin\Cluster\V1\ListClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListClusters(\Google\Bigtable\Admin\Cluster\V1\ListClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/ListClusters',
        $argument,
        ['\Google\Bigtable\Admin\Cluster\V1\ListClustersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a cluster and begins preparing it to begin serving. The returned
     * cluster embeds as its "current_operation" a long-running operation which
     * can be used to track the progress of turning up the new cluster.
     * Immediately upon completion of this request:
     *  * The cluster will be readable via the API, with all requested attributes
     *    but no allocated resources.
     * Until completion of the embedded operation:
     *  * Cancelling the operation will render the cluster immediately unreadable
     *    via the API.
     *  * All other attempts to modify or delete the cluster will be rejected.
     * Upon completion of the embedded operation:
     *  * Billing for all successfully-allocated resources will begin (some types
     *    may have lower than the requested levels).
     *  * New tables can be created in the cluster.
     *  * The cluster's allocated resource levels will be readable via the API.
     * The embedded operation's "metadata" field type is
     * [CreateClusterMetadata][google.bigtable.admin.cluster.v1.CreateClusterMetadata] The embedded operation's "response" field type is
     * [Cluster][google.bigtable.admin.cluster.v1.Cluster], if successful.
     * @param \Google\Bigtable\Admin\Cluster\V1\CreateClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateCluster(\Google\Bigtable\Admin\Cluster\V1\CreateClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/CreateCluster',
        $argument,
        ['\Google\Bigtable\Admin\Cluster\V1\Cluster', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a cluster, and begins allocating or releasing resources as
     * requested. The returned cluster embeds as its "current_operation" a
     * long-running operation which can be used to track the progress of updating
     * the cluster.
     * Immediately upon completion of this request:
     *  * For resource types where a decrease in the cluster's allocation has been
     *    requested, billing will be based on the newly-requested level.
     * Until completion of the embedded operation:
     *  * Cancelling the operation will set its metadata's "cancelled_at_time",
     *    and begin restoring resources to their pre-request values. The operation
     *    is guaranteed to succeed at undoing all resource changes, after which
     *    point it will terminate with a CANCELLED status.
     *  * All other attempts to modify or delete the cluster will be rejected.
     *  * Reading the cluster via the API will continue to give the pre-request
     *    resource levels.
     * Upon completion of the embedded operation:
     *  * Billing will begin for all successfully-allocated resources (some types
     *    may have lower than the requested levels).
     *  * All newly-reserved resources will be available for serving the cluster's
     *    tables.
     *  * The cluster's new resource levels will be readable via the API.
     * [UpdateClusterMetadata][google.bigtable.admin.cluster.v1.UpdateClusterMetadata] The embedded operation's "response" field type is
     * [Cluster][google.bigtable.admin.cluster.v1.Cluster], if successful.
     * @param \Google\Bigtable\Admin\Cluster\V1\Cluster $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateCluster(\Google\Bigtable\Admin\Cluster\V1\Cluster $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/UpdateCluster',
        $argument,
        ['\Google\Bigtable\Admin\Cluster\V1\Cluster', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks a cluster and all of its tables for permanent deletion in 7 days.
     * Immediately upon completion of the request:
     *  * Billing will cease for all of the cluster's reserved resources.
     *  * The cluster's "delete_time" field will be set 7 days in the future.
     * Soon afterward:
     *  * All tables within the cluster will become unavailable.
     * Prior to the cluster's "delete_time":
     *  * The cluster can be recovered with a call to UndeleteCluster.
     *  * All other attempts to modify or delete the cluster will be rejected.
     * At the cluster's "delete_time":
     *  * The cluster and *all of its tables* will immediately and irrevocably
     *    disappear from the API, and their data will be permanently deleted.
     * @param \Google\Bigtable\Admin\Cluster\V1\DeleteClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCluster(\Google\Bigtable\Admin\Cluster\V1\DeleteClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/DeleteCluster',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancels the scheduled deletion of an cluster and begins preparing it to
     * resume serving. The returned operation will also be embedded as the
     * cluster's "current_operation".
     * Immediately upon completion of this request:
     *  * The cluster's "delete_time" field will be unset, protecting it from
     *    automatic deletion.
     * Until completion of the returned operation:
     *  * The operation cannot be cancelled.
     * Upon completion of the returned operation:
     *  * Billing for the cluster's resources will resume.
     *  * All tables within the cluster will be available.
     * [UndeleteClusterMetadata][google.bigtable.admin.cluster.v1.UndeleteClusterMetadata] The embedded operation's "response" field type is
     * [Cluster][google.bigtable.admin.cluster.v1.Cluster], if successful.
     * @param \Google\Bigtable\Admin\Cluster\V1\UndeleteClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UndeleteCluster(\Google\Bigtable\Admin\Cluster\V1\UndeleteClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.bigtable.admin.cluster.v1.BigtableClusterService/UndeleteCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
