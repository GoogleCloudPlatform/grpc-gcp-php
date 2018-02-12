<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An item in the carousel.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.CarouselSelect.Item</code>
 */
class Intent_Message_CarouselSelect_Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Additional info about the option item.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.SelectItemInfo info = 1;</code>
     */
    private $info = null;
    /**
     * Required. Title of the carousel item.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Optional. The body text of the card.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Image image = 4;</code>
     */
    private $image = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct();
    }

    /**
     * Required. Additional info about the option item.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.SelectItemInfo info = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent_Message_SelectItemInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Required. Additional info about the option item.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.SelectItemInfo info = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent_Message_SelectItemInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_SelectItemInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Required. Title of the carousel item.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. Title of the carousel item.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The body text of the card.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The body text of the card.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Image image = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Optional. The image to display.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Image image = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Image::class);
        $this->image = $var;

        return $this;
    }

}

