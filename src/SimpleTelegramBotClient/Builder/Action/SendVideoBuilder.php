<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendVideo;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendVideoBuilder
{

    /**
     * @var string
     */
    private $chatId;

    /**
     * @var string|resource
     */
    private $video;

    /**
     * @var int|null
     */
    private $duration;

    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    /**
     * @var string|resource|null
     */
    private $thumb;

    /**
     * @var string|null
     */
    private $caption;

    /**
     * @var string|null
     */
    private $parseMode;

    /**
     * @var bool|null
     */
    private $supports_streaming;

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

    public function __construct(string $chatId, $video)
    {
        $this->chatId = $chatId;
        $this->video = $video;
    }

    public function build(): SendVideo
    {
        return new SendVideo(
            $this->chatId,
            $this->video,
            $this->duration,
            $this->width,
            $this->height,
            $this->thumb,
            $this->caption,
            $this->parseMode,
            $this->supports_streaming,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param resource|string $video
     * @return SendVideoBuilder
     */
    public function setVideo($video): SendVideoBuilder
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @param int|null $duration
     * @return SendVideoBuilder
     */
    public function setDuration(?int $duration): SendVideoBuilder
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param int $width
     * @return SendVideoBuilder
     */
    public function setWidth(int $width): SendVideoBuilder
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int $height
     * @return SendVideoBuilder
     */
    public function setHeight(int $height): SendVideoBuilder
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param resource|string|null $thumb
     * @return SendVideoBuilder
     */
    public function setThumb($thumb): SendVideoBuilder
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @param string|null $caption
     * @return SendVideoBuilder
     */
    public function setCaption(?string $caption): SendVideoBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendVideoBuilder
     */
    public function setParseMode(?string $parseMode): SendVideoBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param bool|null $supports_streaming
     * @return SendVideoBuilder
     */
    public function setSupportsStreaming(?bool $supports_streaming): SendVideoBuilder
    {
        $this->supports_streaming = $supports_streaming;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendVideoBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendVideoBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendVideoBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendVideoBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendVideoBuilder
     */
    public function setReplyMarkup($replyMarkup): SendVideoBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
