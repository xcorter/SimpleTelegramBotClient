<?php


namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendAnimation;


class SendAnimationBuilder
{

    /**
     * @var string     *
     */
    private $chatId;

    /**
     * @var string|resource     *
     */
    private $animation;

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
    private $disableNotification;
    /**
     * @var int|null
     * @Type("integer")
     */
    private $replyToMessageId;

    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    public function __construct(string $chatId, $animation)
    {
        $this->chatId = $chatId;
        $this->animation = $animation;
    }

    public function build(): SendAnimation
    {
        return new SendAnimation(
            $this->chatId,
            $this->animation,
            $this->duration,
            $this->width,
            $this->height,
            $this->thumb,
            $this->caption,
            $this->parseMode,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param resource|string $animation
     * @return SendAnimationBuilder
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;
        return $this;
    }

    /**
     * @param int|null $duration
     * @return SendAnimationBuilder
     */
    public function setDuration(?int $duration): SendAnimationBuilder
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param int $width
     * @return SendAnimationBuilder
     */
    public function setWidth(int $width): SendAnimationBuilder
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int $height
     * @return SendAnimationBuilder
     */
    public function setHeight(int $height): SendAnimationBuilder
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param resource|string|null $thumb
     * @return SendAnimationBuilder
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @param string|null $caption
     * @return SendAnimationBuilder
     */
    public function setCaption(?string $caption): SendAnimationBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendAnimationBuilder
     */
    public function setParseMode(?string $parseMode): SendAnimationBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendAnimationBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendAnimationBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendAnimationBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendAnimationBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendAnimationBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }



}