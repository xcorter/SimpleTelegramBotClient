<?php

namespace SimpleTelegramClient\Builder\Action;

use SimpleTelegramClient\Constant\ParseMode;
use SimpleTelegramClient\Dto\Action\SendMessage;
use SimpleTelegramClient\Dto\ForceReply;
use SimpleTelegramClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendMessageBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $text;
    /**
     * @var string|null
     */
    private $parseMode;
    /**
     * @var bool|null
     */
    private $disableWebPagePreview;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var int|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    public function __construct(string $chatId, string $text)
    {
        $this->chatId = $chatId;
        $this->text = $text;
    }

    /**
     * Values from constants of ParseMode
     *
     * @param string $parseMode
     * @return SendMessageBuilder
     */
    public function setParseMode(string $parseMode): SendMessageBuilder
    {
        if (!in_array($parseMode, ParseMode::AVAILABLE_VALUES, true)) {
            throw new \UnexpectedValueException('Wrong parse mode');
        }
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param bool|null $disableWebPagePreview
     * @return SendMessageBuilder
     */
    public function setDisableWebPagePreview(?bool $disableWebPagePreview): SendMessageBuilder
    {
        $this->disableWebPagePreview = $disableWebPagePreview;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendMessageBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendMessageBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendMessageBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendMessageBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|InlineKeyboardMarkup|null $replyMarkup
     * @return SendMessageBuilder
     */
    public function setReplyMarkup($replyMarkup): SendMessageBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

    /**
     * @return SendMessage
     */
    public function build(): SendMessage
    {
        return new SendMessage(
            $this->chatId,
            $this->text,
            $this->parseMode,
            $this->disableWebPagePreview,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }
}
