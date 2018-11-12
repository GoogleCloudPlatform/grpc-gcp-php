<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters facilitate setting and delivering data into the
 * pipeline's execution environment. They are defined at create time,
 * with optional defaults, and can be overridden at run time.
 * If `localCopy` is unset, then the parameter specifies a string that
 * is passed as-is into the pipeline, as the value of the environment
 * variable with the given name.  A default value can be optionally
 * specified at create time. The default can be overridden at run time
 * using the inputs map. If no default is given, a value must be
 * supplied at runtime.
 * If `localCopy` is defined, then the parameter specifies a data
 * source or sink, both in Google Cloud Storage and on the Docker container
 * where the pipeline computation is run. The [service account associated with
 * the Pipeline][google.genomics.v1alpha2.RunPipelineArgs.service_account] (by
 * default the project's Compute Engine service account) must have access to the
 * Google Cloud Storage paths.
 * At run time, the Google Cloud Storage paths can be overridden if a default
 * was provided at create time, or must be set otherwise. The pipeline runner
 * should add a key/value pair to either the inputs or outputs map. The
 * indicated data copies will be carried out before/after pipeline execution,
 * just as if the corresponding arguments were provided to `gsutil cp`.
 * For example: Given the following `PipelineParameter`, specified
 * in the `inputParameters` list:
 * ```
 * {name: "input_file", localCopy: {path: "file.txt", disk: "pd1"}}
 * ```
 * where `disk` is defined in the `PipelineResources` object as:
 * ```
 * {name: "pd1", mountPoint: "/mnt/disk/"}
 * ```
 * We create a disk named `pd1`, mount it on the host VM, and map
 * `/mnt/pd1` to `/mnt/disk` in the docker container.  At
 * runtime, an entry for `input_file` would be required in the inputs
 * map, such as:
 * ```
 *   inputs["input_file"] = "gs://my-bucket/bar.txt"
 * ```
 * This would generate the following gsutil call:
 * ```
 *   gsutil cp gs://my-bucket/bar.txt /mnt/pd1/file.txt
 * ```
 * The file `/mnt/pd1/file.txt` maps to `/mnt/disk/file.txt` in the
 * Docker container. Acceptable paths are:
 * <table>
 *   <thead>
 *     <tr><th>Google Cloud storage path</th><th>Local path</th></tr>
 *   </thead>
 *   <tbody>
 *     <tr><td>file</td><td>file</td></tr>
 *     <tr><td>glob</td><td>directory</td></tr>
 *   </tbody>
 * </table>
 * For outputs, the direction of the copy is reversed:
 * ```
 *   gsutil cp /mnt/disk/file.txt gs://my-bucket/bar.txt
 * ```
 * Acceptable paths are:
 * <table>
 *   <thead>
 *     <tr><th>Local path</th><th>Google Cloud Storage path</th></tr>
 *   </thead>
 *   <tbody>
 *     <tr><td>file</td><td>file</td></tr>
 *     <tr>
 *       <td>file</td>
 *       <td>directory - directory must already exist</td>
 *     </tr>
 *     <tr>
 *       <td>glob</td>
 *       <td>directory - directory will be created if it doesn't exist</td></tr>
 *   </tbody>
 * </table>
 * One restriction due to docker limitations, is that for outputs that are found
 * on the boot disk, the local path cannot be a glob and must be a file.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.PipelineParameter</code>
 */
class PipelineParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the parameter - the pipeline runner uses this string
     * as the key to the input and output maps in RunPipeline.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Human-readable description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * The default value for this parameter. Can be overridden at runtime.
     * If `localCopy` is present, then this must be a Google Cloud Storage path
     * beginning with `gs://`.
     *
     * Generated from protobuf field <code>string default_value = 5;</code>
     */
    private $default_value = '';
    /**
     * If present, this parameter is marked for copying to and from the VM.
     * `LocalCopy` indicates where on the VM the file should be. The value
     * given to this parameter (either at runtime or using `defaultValue`)
     * must be the remote path where the file should be.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineParameter.LocalCopy local_copy = 6;</code>
     */
    private $local_copy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the parameter - the pipeline runner uses this string
     *           as the key to the input and output maps in RunPipeline.
     *     @type string $description
     *           Human-readable description.
     *     @type string $default_value
     *           The default value for this parameter. Can be overridden at runtime.
     *           If `localCopy` is present, then this must be a Google Cloud Storage path
     *           beginning with `gs://`.
     *     @type \Google\Genomics\V1alpha2\PipelineParameter\LocalCopy $local_copy
     *           If present, this parameter is marked for copying to and from the VM.
     *           `LocalCopy` indicates where on the VM the file should be. The value
     *           given to this parameter (either at runtime or using `defaultValue`)
     *           must be the remote path where the file should be.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the parameter - the pipeline runner uses this string
     * as the key to the input and output maps in RunPipeline.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the parameter - the pipeline runner uses this string
     * as the key to the input and output maps in RunPipeline.
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
     * Human-readable description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The default value for this parameter. Can be overridden at runtime.
     * If `localCopy` is present, then this must be a Google Cloud Storage path
     * beginning with `gs://`.
     *
     * Generated from protobuf field <code>string default_value = 5;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * The default value for this parameter. Can be overridden at runtime.
     * If `localCopy` is present, then this must be a Google Cloud Storage path
     * beginning with `gs://`.
     *
     * Generated from protobuf field <code>string default_value = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value = $var;

        return $this;
    }

    /**
     * If present, this parameter is marked for copying to and from the VM.
     * `LocalCopy` indicates where on the VM the file should be. The value
     * given to this parameter (either at runtime or using `defaultValue`)
     * must be the remote path where the file should be.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineParameter.LocalCopy local_copy = 6;</code>
     * @return \Google\Genomics\V1alpha2\PipelineParameter\LocalCopy
     */
    public function getLocalCopy()
    {
        return $this->local_copy;
    }

    /**
     * If present, this parameter is marked for copying to and from the VM.
     * `LocalCopy` indicates where on the VM the file should be. The value
     * given to this parameter (either at runtime or using `defaultValue`)
     * must be the remote path where the file should be.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineParameter.LocalCopy local_copy = 6;</code>
     * @param \Google\Genomics\V1alpha2\PipelineParameter\LocalCopy $var
     * @return $this
     */
    public function setLocalCopy($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1alpha2\PipelineParameter_LocalCopy::class);
        $this->local_copy = $var;

        return $this;
    }

}
