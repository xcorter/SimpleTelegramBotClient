<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendVoice;
use SimpleTelegramBotClient\Dto\Type\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendVoiceBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|resource
     */
    private $voice;
    /**
     * @var string|null
     */
    private $caption;
    /**
     * @var string|null
     */
    private $parseMode;
    /**
     * @var integer|null
     */
    private $duration;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var integer|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    /**
     * SendVoiceBuilder constructor.
     * @param string $chatId
     * @param resource|string $voice
     */
    public function __construct(string $chatId, $voice)
    {
        $this->chatId = $chatId;
        $this->voice = $voice;
    }

    /**
     * @return SendVoice
     */
    public function build(): SendVoice
    {
        return new SendVoice(
            $this->chatId,
            $this->voice,
            $this->caption,
            $this->parseMode,
            $this->duration,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $caption
     * @return SendVoiceBuilder
     */
    public function setCaption(?string $caption): SendVoiceBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendVoiceBuilder
     */
    public function setParseMode(?string $parseMode): SendVoiceBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param int|null $duration
     * @return SendVoiceBuilder
     */
    public function setDuration(?int $duration): SendVoiceBuilder
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendVoiceBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendVoiceBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendVoiceBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendVoiceBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendVoiceBuilder
     */
    public function setReplyMarkup($replyMarkup): SendVoiceBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
