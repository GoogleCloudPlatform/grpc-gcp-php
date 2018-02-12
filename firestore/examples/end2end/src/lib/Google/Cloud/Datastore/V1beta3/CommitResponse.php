<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/datastore.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Datastore.Commit][google.datastore.v1beta3.Datastore.Commit].
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.CommitResponse</code>
 */
class CommitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.MutationResult mutation_results = 3;</code>
     */
    private $mutation_results;
    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     */
    private $index_updates = 0;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1Beta3\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.MutationResult mutation_results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutationResults()
    {
        return $this->mutation_results;
    }

    /**
     * The result of performing the mutations.
     * The i-th mutation result corresponds to the i-th mutation in the request.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.MutationResult mutation_results = 3;</code>
     * @param \Google\Cloud\Datastore\V1beta3\MutationResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutationResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\MutationResult::class);
        $this->mutation_results = $arr;

        return $this;
    }

    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     * @return int
     */
    public function getIndexUpdates()
    {
        return $this->index_updates;
    }

    /**
     * The number of index entries updated during the commit, or zero if none were
     * updated.
     *
     * Generated from protobuf field <code>int32 index_updates = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIndexUpdates($var)
    {
        GPBUtil::checkInt32($var);
        $this->index_updates = $var;

        return $this;
    }

}

