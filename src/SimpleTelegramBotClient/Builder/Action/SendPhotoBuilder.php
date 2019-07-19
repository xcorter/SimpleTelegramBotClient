<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendPhoto;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendPhotoBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var resource|string
     */
    private $photo;
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
    private $disableNotification;
    /**
     * @var int|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    public function __construct(string $chatId, $photo)
    {
        $this->chatId = $chatId;
        $this->photo = $photo;
    }

    /**
     * @return SendPhoto
     */
    public function build(): SendPhoto
    {
        return new SendPhoto(
            $this->chatId,
            $this->photo,
            $this->caption,
            $this->parseMode,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $caption
     * @return SendPhotoBuilder
     */
    public function setCaption(?string $caption): SendPhotoBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendPhotoBuilder
     */
    public function setParseMode(?string $parseMode): SendPhotoBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendPhotoBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendPhotoBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendPhotoBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendPhotoBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendPhotoBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
