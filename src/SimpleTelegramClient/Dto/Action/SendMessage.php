<?php

namespace SimpleTelegramClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramClient\Dto\ForceReply;
use SimpleTelegramClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendMessage
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var string
     * @Type("string")
     */
    private $text;
    /**
     * @var string|null
     * @Type("string")
     */
    private $parseMode;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableWebPagePreview;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableNotification;
    /**
     * @var int|null
     * @Type("int")
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * SendMessage constructor.
     * @param string $chatId
     * @param string $text
     * @param string|null $parseMode
     * @param bool|null $disableWebPagePreview
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup
     */
    public function __construct(
        string $chatId,
        string $text,
        ?string $parseMode,
        ?bool $disableWebPagePreview,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->text = $text;
        $this->parseMode = $parseMode;
        $this->disableWebPagePreview = $disableWebPagePreview;
        $this->disableNotification = $disableNotification;
        $this->replyToMessageId = $replyToMessageId;
        $this->replyMarkup = $replyMarkup;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getParseMode(): string
    {
        return $this->parseMode;
    }

    /**
     * @return bool|null
     */
    public function getDisableWebPagePreview(): ?bool
    {
        return $this->disableWebPagePreview;
    }

    /**
     * @return bool|null
     */
    public function getDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    /**
     * @return int|null
     */
    public function getReplyToMessageId(): ?int
    {
        return $this->replyToMessageId;
    }

    /**
     * @return ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|InlineKeyboardMarkup|null
     */
    public function getReplyMarkup()
    {
        return $this->replyMarkup;
    }
}
