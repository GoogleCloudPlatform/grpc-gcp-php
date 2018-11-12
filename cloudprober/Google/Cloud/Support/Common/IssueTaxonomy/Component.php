<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/common.proto

namespace Google\Cloud\Support\Common\IssueTaxonomy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The representation of a product component. It is composed of a canonical
 * name for the product (e.g., Google App Engine), languages in which a
 * support ticket can be created under this component, a template that
 * provides hints on important details to be filled out before submitting a
 * case. It also contains an embedded list of product subcomponents that have
 * similar attributes as top-level components.
 * (e.g., Google App Engine > Memcache).
 *
 * Generated from protobuf message <code>google.cloud.support.common.IssueTaxonomy.Component</code>
 */
class Component extends \Google\Protobuf\Internal\Message
{
    /**
     * User friendly name of this component.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * List of languages in which a support case can be created under this
     * component. Represented by language codes in ISO_639-1 standard.
     *
     * Generated from protobuf field <code>repeated string languages = 2;</code>
     */
    private $languages;
    /**
     * Template to be used while filling the description of a support case.
     *
     * Generated from protobuf field <code>string template = 3;</code>
     */
    private $template = '';
    /**
     * List of subcomponents under this component.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.IssueTaxonomy.Component subcomponents = 4;</code>
     */
    private $subcomponents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           User friendly name of this component.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $languages
     *           List of languages in which a support case can be created under this
     *           component. Represented by language codes in ISO_639-1 standard.
     *     @type string $template
     *           Template to be used while filling the description of a support case.
     *     @type \Google\Cloud\Support\Common\IssueTaxonomy\Component[]|\Google\Protobuf\Internal\RepeatedField $subcomponents
     *           List of subcomponents under this component.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * User friendly name of this component.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User friendly name of this component.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * List of languages in which a support case can be created under this
     * component. Represented by language codes in ISO_639-1 standard.
     *
     * Generated from protobuf field <code>repeated string languages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * List of languages in which a support case can be created under this
     * component. Represented by language codes in ISO_639-1 standard.
     *
     * Generated from protobuf field <code>repeated string languages = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->languages = $arr;

        return $this;
    }

    /**
     * Template to be used while filling the description of a support case.
     *
     * Generated from protobuf field <code>string template = 3;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Template to be used while filling the description of a support case.
     *
     * Generated from protobuf field <code>string template = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * List of subcomponents under this component.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.IssueTaxonomy.Component subcomponents = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubcomponents()
    {
        return $this->subcomponents;
    }

    /**
     * List of subcomponents under this component.
     *
     * Generated from protobuf field <code>repeated .google.cloud.support.common.IssueTaxonomy.Component subcomponents = 4;</code>
     * @param \Google\Cloud\Support\Common\IssueTaxonomy\Component[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubcomponents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Support\Common\IssueTaxonomy\Component::class);
        $this->subcomponents = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Component::class, \Google\Cloud\Support\Common\IssueTaxonomy_Component::class);
