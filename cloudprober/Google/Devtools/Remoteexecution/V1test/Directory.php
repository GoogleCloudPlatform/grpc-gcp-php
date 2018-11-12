<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Directory` represents a directory node in a file tree, containing zero or
 * more children [FileNodes][google.devtools.remoteexecution.v1test.FileNode]
 * and [DirectoryNodes][google.devtools.remoteexecution.v1test.DirectoryNode].
 * Each `Node` contains its name in the directory, the digest of its content
 * (either a file blob or a `Directory` proto), as well as possibly some
 * metadata about the file or directory.
 * In order to ensure that two equivalent directory trees hash to the same
 * value, the following restrictions MUST be obeyed when constructing a
 * a `Directory`:
 *   - Every child in the directory must have a path of exactly one segment.
 *     Multiple levels of directory hierarchy may not be collapsed.
 *   - Each child in the directory must have a unique path segment (file name).
 *   - The files and directories in the directory must each be sorted in
 *     lexicographical order by path. The path strings must be sorted by code
 *     point, equivalently, by UTF-8 bytes.
 * A `Directory` that obeys the restrictions is said to be in canonical form.
 * As an example, the following could be used for a file named `bar` and a
 * directory named `foo` with an executable file named `baz` (hashes shortened
 * for readability):
 * ```json
 * // (Directory proto)
 * {
 *   files: [
 *     {
 *       name: "bar",
 *       digest: {
 *         hash: "4a73bc9d03...",
 *         size: 65534
 *       }
 *     }
 *   ],
 *   directories: [
 *     {
 *       name: "foo",
 *       digest: {
 *         hash: "4cf2eda940...",
 *         size: 43
 *       }
 *     }
 *   ]
 * }
 * // (Directory proto with hash "4cf2eda940..." and size 43)
 * {
 *   files: [
 *     {
 *       name: "baz",
 *       digest: {
 *         hash: "b2c941073e...",
 *         size: 1294,
 *       },
 *       is_executable: true
 *     }
 *   ]
 * }
 * ```
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.Directory</code>
 */
class Directory extends \Google\Protobuf\Internal\Message
{
    /**
     * The files in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.FileNode files = 1;</code>
     */
    private $files;
    /**
     * The subdirectories in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.DirectoryNode directories = 2;</code>
     */
    private $directories;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Remoteexecution\V1test\FileNode[]|\Google\Protobuf\Internal\RepeatedField $files
     *           The files in the directory.
     *     @type \Google\Devtools\Remoteexecution\V1test\DirectoryNode[]|\Google\Protobuf\Internal\RepeatedField $directories
     *           The subdirectories in the directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct($data);
    }

    /**
     * The files in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.FileNode files = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * The files in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.FileNode files = 1;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\FileNode[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteexecution\V1test\FileNode::class);
        $this->files = $arr;

        return $this;
    }

    /**
     * The subdirectories in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.DirectoryNode directories = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectories()
    {
        return $this->directories;
    }

    /**
     * The subdirectories in the directory.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.DirectoryNode directories = 2;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\DirectoryNode[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteexecution\V1test\DirectoryNode::class);
        $this->directories = $arr;

        return $this;
    }

}
