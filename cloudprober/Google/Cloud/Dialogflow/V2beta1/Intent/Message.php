<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Corresponds to the `Response` field in the Dialogflow console.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Platform platform = 6;</code>
     */
    private $platform = 0;
    protected $message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Text $text
     *           Returns a text response.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Image $image
     *           Displays an image.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\QuickReplies $quick_replies
     *           Displays quick replies.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Card $card
     *           Displays a card.
     *     @type \Google\Protobuf\Struct $payload
     *           Returns a response containing a custom, platform-specific payload.
     *           See the Intent.Message.Platform type for a description of the
     *           structure that may be required for your platform.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\SimpleResponses $simple_responses
     *           Returns a voice or text-only response for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\BasicCard $basic_card
     *           Displays a basic card for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Suggestions $suggestions
     *           Displays suggestion chips for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\LinkOutSuggestion $link_out_suggestion
     *           Displays a link out suggestion chip for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\ListSelect $list_select
     *           Displays a list card for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\CarouselSelect $carousel_select
     *           Displays a carousel card for Actions on Google.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyPlayAudio $telephony_play_audio
     *           Plays audio from a file in Telephony Gateway.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonySynthesizeSpeech $telephony_synthesize_speech
     *           Synthesizes speech in Telephony Gateway.
     *     @type \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyTransferCall $telephony_transfer_call
     *           Transfers the call in Telephony Gateway.
     *     @type int $platform
     *           Optional. The platform that this message is intended for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Returns a text response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Text text = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Text
     */
    public function getText()
    {
        return $this->readOneof(1);
    }

    /**
     * Returns a text response.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Text text = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Text $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Text::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Displays an image.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Image image = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Image
     */
    public function getImage()
    {
        return $this->readOneof(2);
    }

    /**
     * Displays an image.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Image image = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Image::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Displays quick replies.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.QuickReplies quick_replies = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\QuickReplies
     */
    public function getQuickReplies()
    {
        return $this->readOneof(3);
    }

    /**
     * Displays quick replies.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.QuickReplies quick_replies = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\QuickReplies $var
     * @return $this
     */
    public function setQuickReplies($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_QuickReplies::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Displays a card.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Card card = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Card
     */
    public function getCard()
    {
        return $this->readOneof(4);
    }

    /**
     * Displays a card.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Card card = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Card $var
     * @return $this
     */
    public function setCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Card::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Returns a response containing a custom, platform-specific payload.
     * See the Intent.Message.Platform type for a description of the
     * structure that may be required for your platform.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 5;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getPayload()
    {
        return $this->readOneof(5);
    }

    /**
     * Returns a response containing a custom, platform-specific payload.
     * See the Intent.Message.Platform type for a description of the
     * structure that may be required for your platform.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Returns a voice or text-only response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.SimpleResponses simple_responses = 7;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\SimpleResponses
     */
    public function getSimpleResponses()
    {
        return $this->readOneof(7);
    }

    /**
     * Returns a voice or text-only response for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.SimpleResponses simple_responses = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\SimpleResponses $var
     * @return $this
     */
    public function setSimpleResponses($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_SimpleResponses::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Displays a basic card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.BasicCard basic_card = 8;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\BasicCard
     */
    public function getBasicCard()
    {
        return $this->readOneof(8);
    }

    /**
     * Displays a basic card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.BasicCard basic_card = 8;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\BasicCard $var
     * @return $this
     */
    public function setBasicCard($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_BasicCard::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Displays suggestion chips for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Suggestions suggestions = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Suggestions
     */
    public function getSuggestions()
    {
        return $this->readOneof(9);
    }

    /**
     * Displays suggestion chips for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Suggestions suggestions = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\Suggestions $var
     * @return $this
     */
    public function setSuggestions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Suggestions::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Displays a link out suggestion chip for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.LinkOutSuggestion link_out_suggestion = 10;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\LinkOutSuggestion
     */
    public function getLinkOutSuggestion()
    {
        return $this->readOneof(10);
    }

    /**
     * Displays a link out suggestion chip for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.LinkOutSuggestion link_out_suggestion = 10;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\LinkOutSuggestion $var
     * @return $this
     */
    public function setLinkOutSuggestion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_LinkOutSuggestion::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Displays a list card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.ListSelect list_select = 11;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\ListSelect
     */
    public function getListSelect()
    {
        return $this->readOneof(11);
    }

    /**
     * Displays a list card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.ListSelect list_select = 11;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\ListSelect $var
     * @return $this
     */
    public function setListSelect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_ListSelect::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Displays a carousel card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.CarouselSelect carousel_select = 12;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\CarouselSelect
     */
    public function getCarouselSelect()
    {
        return $this->readOneof(12);
    }

    /**
     * Displays a carousel card for Actions on Google.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.CarouselSelect carousel_select = 12;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\CarouselSelect $var
     * @return $this
     */
    public function setCarouselSelect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_CarouselSelect::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Plays audio from a file in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonyPlayAudio telephony_play_audio = 13;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyPlayAudio
     */
    public function getTelephonyPlayAudio()
    {
        return $this->readOneof(13);
    }

    /**
     * Plays audio from a file in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonyPlayAudio telephony_play_audio = 13;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyPlayAudio $var
     * @return $this
     */
    public function setTelephonyPlayAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_TelephonyPlayAudio::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Synthesizes speech in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonySynthesizeSpeech telephony_synthesize_speech = 14;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonySynthesizeSpeech
     */
    public function getTelephonySynthesizeSpeech()
    {
        return $this->readOneof(14);
    }

    /**
     * Synthesizes speech in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonySynthesizeSpeech telephony_synthesize_speech = 14;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonySynthesizeSpeech $var
     * @return $this
     */
    public function setTelephonySynthesizeSpeech($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_TelephonySynthesizeSpeech::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Transfers the call in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonyTransferCall telephony_transfer_call = 15;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyTransferCall
     */
    public function getTelephonyTransferCall()
    {
        return $this->readOneof(15);
    }

    /**
     * Transfers the call in Telephony Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.TelephonyTransferCall telephony_transfer_call = 15;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Intent\Message\TelephonyTransferCall $var
     * @return $this
     */
    public function setTelephonyTransferCall($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_TelephonyTransferCall::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Platform platform = 6;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Optional. The platform that this message is intended for.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.Platform platform = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_Platform::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->whichOneof("message");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, \Google\Cloud\Dialogflow\V2beta1\Intent_Message::class);
