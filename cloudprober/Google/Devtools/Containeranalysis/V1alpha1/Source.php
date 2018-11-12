<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/provenance.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Source describes the location of the source used for the build.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * If provided, the input binary artifacts for the build came from this
     * location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.StorageSource artifact_storage_source = 4;</code>
     */
    private $artifact_storage_source = null;
    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.containeranalysis.v1alpha1.FileHashes> file_hashes = 3;</code>
     */
    private $file_hashes;
    /**
     * If provided, the source code used for the build came from this location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.SourceContext context = 7;</code>
     */
    private $context = null;
    /**
     * If provided, some of the source code used for the build may be found in
     * these locations, in the case where the source repository had multiple
     * remotes or submodules. This list will not include the context specified in
     * the context field.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.SourceContext additional_contexts = 8;</code>
     */
    private $additional_contexts;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\StorageSource $storage_source
     *           If provided, get the source from this location in in Google Cloud
     *           Storage.
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\RepoSource $repo_source
     *           If provided, get source from this location in a Cloud Repo.
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\StorageSource $artifact_storage_source
     *           If provided, the input binary artifacts for the build came from this
     *           location.
     *     @type array|\Google\Protobuf\Internal\MapField $file_hashes
     *           Hash(es) of the build source, which can be used to verify that the original
     *           source integrity was maintained in the build.
     *           The keys to this map are file paths used as build source and the values
     *           contain the hash values for those files.
     *           If the build source came in a single package such as a gzipped tarfile
     *           (.tar.gz), the FileHash will be for the single path to that file.
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\SourceContext $context
     *           If provided, the source code used for the build came from this location.
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\SourceContext[]|\Google\Protobuf\Internal\RepeatedField $additional_contexts
     *           If provided, some of the source code used for the build may be found in
     *           these locations, in the case where the source repository had multiple
     *           remotes or submodules. This list will not include the context specified in
     *           the context field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Provenance::initOnce();
        parent::__construct($data);
    }

    /**
     * If provided, get the source from this location in in Google Cloud
     * Storage.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.StorageSource storage_source = 1;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\StorageSource
     */
    public function getStorageSource()
    {
        return $this->readOneof(1);
    }

    /**
     * If provided, get the source from this location in in Google Cloud
     * Storage.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.StorageSource storage_source = 1;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\StorageSource $var
     * @return $this
     */
    public function setStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\StorageSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * If provided, get source from this location in a Cloud Repo.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.RepoSource repo_source = 2;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\RepoSource
     */
    public function getRepoSource()
    {
        return $this->readOneof(2);
    }

    /**
     * If provided, get source from this location in a Cloud Repo.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.RepoSource repo_source = 2;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\RepoSource $var
     * @return $this
     */
    public function setRepoSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\RepoSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If provided, the input binary artifacts for the build came from this
     * location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.StorageSource artifact_storage_source = 4;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\StorageSource
     */
    public function getArtifactStorageSource()
    {
        return $this->artifact_storage_source;
    }

    /**
     * If provided, the input binary artifacts for the build came from this
     * location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.StorageSource artifact_storage_source = 4;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\StorageSource $var
     * @return $this
     */
    public function setArtifactStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\StorageSource::class);
        $this->artifact_storage_source = $var;

        return $this;
    }

    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.containeranalysis.v1alpha1.FileHashes> file_hashes = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFileHashes()
    {
        return $this->file_hashes;
    }

    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (.tar.gz), the FileHash will be for the single path to that file.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.containeranalysis.v1alpha1.FileHashes> file_hashes = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFileHashes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Containeranalysis\V1alpha1\FileHashes::class);
        $this->file_hashes = $arr;

        return $this;
    }

    /**
     * If provided, the source code used for the build came from this location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.SourceContext context = 7;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\SourceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * If provided, the source code used for the build came from this location.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.SourceContext context = 7;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\SourceContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\SourceContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * If provided, some of the source code used for the build may be found in
     * these locations, in the case where the source repository had multiple
     * remotes or submodules. This list will not include the context specified in
     * the context field.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.SourceContext additional_contexts = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalContexts()
    {
        return $this->additional_contexts;
    }

    /**
     * If provided, some of the source code used for the build may be found in
     * these locations, in the case where the source repository had multiple
     * remotes or submodules. This list will not include the context specified in
     * the context field.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.SourceContext additional_contexts = 8;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\SourceContext[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Containeranalysis\V1alpha1\SourceContext::class);
        $this->additional_contexts = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
