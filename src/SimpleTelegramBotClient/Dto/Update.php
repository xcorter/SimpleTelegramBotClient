<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Update
 * @package SimpleTelegramBotClient\Dto
 *
 * @link https://core.telegram.org/bots/api#update
 */
class Update
{
    /**
     * @var int
     * @Type("int")
     */
    private $updateId;

    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $message;

    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $editedMessage;

    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $channelPost;

    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $editedChannelPost;
//    /**
//     * @var InlineQuery|null
//     */
//    private $inlineQuery;
//    /**
//     * @var ChosenInlineResult
//     */
//    private $chosenInlineResult;
//    /**
//     * @var CallbackQuery
//     */
//    private $callbackQuery;
//    /**
//     * @var ShippingQuery
//     */
//    private $shippingQuery;
//    /**
//     * @var PreCheckoutQuery
//     */
//    private $preCheckoutQuery;
    /**
     * @var Poll|null
     * @Type("SimpleTelegramBotClient\Dto\Poll")
     */
    private $poll;

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    /**
     * @return Message|null
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * @return Message|null
     */
    public function getEditedMessage(): ?Message
    {
        return $this->editedMessage;
    }

    /**
     * @return Message|null
     */
    public function getChannelPost(): ?Message
    {
        return $this->channelPost;
    }

    /**
     * @return Message|null
     */
    public function getEditedChannelPost(): ?Message
    {
        return $this->editedChannelPost;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }
}
