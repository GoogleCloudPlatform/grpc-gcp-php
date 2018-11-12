<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/target.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attributes that apply to all targets.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.TargetAttributes</code>
 */
class TargetAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * If known, indicates the type of this target.  In bazel this corresponds
     * to the rule-suffix.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.TargetType type = 1;</code>
     */
    private $type = 0;
    /**
     * If known, the main language of this target, e.g. java, cc, python, etc.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Language language = 2;</code>
     */
    private $language = 0;
    /**
     * The tags attribute of the build rule. These should be short, descriptive
     * words, and there should only be a few of them.
     * This is implemented as a set. All tags will be unique. Any duplicate tags
     * will be ignored. Tags will be returned in lexicographical order.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           If known, indicates the type of this target.  In bazel this corresponds
     *           to the rule-suffix.
     *     @type int $language
     *           If known, the main language of this target, e.g. java, cc, python, etc.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tags
     *           The tags attribute of the build rule. These should be short, descriptive
     *           words, and there should only be a few of them.
     *           This is implemented as a set. All tags will be unique. Any duplicate tags
     *           will be ignored. Tags will be returned in lexicographical order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * If known, indicates the type of this target.  In bazel this corresponds
     * to the rule-suffix.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.TargetType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * If known, indicates the type of this target.  In bazel this corresponds
     * to the rule-suffix.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.TargetType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Resultstore\V2\TargetType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * If known, the main language of this target, e.g. java, cc, python, etc.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Language language = 2;</code>
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * If known, the main language of this target, e.g. java, cc, python, etc.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Language language = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Resultstore\V2\Language::class);
        $this->language = $var;

        return $this;
    }

    /**
     * The tags attribute of the build rule. These should be short, descriptive
     * words, and there should only be a few of them.
     * This is implemented as a set. All tags will be unique. Any duplicate tags
     * will be ignored. Tags will be returned in lexicographical order.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * The tags attribute of the build rule. These should be short, descriptive
     * words, and there should only be a few of them.
     * This is implemented as a set. All tags will be unique. Any duplicate tags
     * will be ignored. Tags will be returned in lexicographical order.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}
