<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendAudio;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendAudioBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|resource
     */
    private $audio;
    /**
     * @var string|null
     */
    private $caption;
    /**
     * @var string|null
     */
    private $parseMode;
    /**
     * @var int|null
     */
    private $duration;
    /**
     * @var string|null
     */
    private $performer;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var string|resource
     */
    private $thumb;
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

    /**
     * SendAudioBuilder constructor.
     * @param string $chatId
     * @param resource|string $audio
     */
    public function __construct(string $chatId, $audio)
    {
        $this->chatId = $chatId;
        $this->audio = $audio;
    }

    public function build(): SendAudio
    {
        return new SendAudio(
            $this->chatId,
            $this->audio,
            $this->caption,
            $this->parseMode,
            $this->duration,
            $this->performer,
            $this->title,
            $this->thumb,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $caption
     * @return SendAudioBuilder
     */
    public function setCaption(?string $caption): SendAudioBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendAudioBuilder
     */
    public function setParseMode(?string $parseMode): SendAudioBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param int|null $duration
     * @return SendAudioBuilder
     */
    public function setDuration(?int $duration): SendAudioBuilder
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param string|null $performer
     * @return SendAudioBuilder
     */
    public function setPerformer(?string $performer): SendAudioBuilder
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @param string|null $title
     * @return SendAudioBuilder
     */
    public function setTitle(?string $title): SendAudioBuilder
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param resource|string $thumb
     * @return SendAudioBuilder
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendAudioBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendAudioBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendAudioBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendAudioBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendAudioBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
