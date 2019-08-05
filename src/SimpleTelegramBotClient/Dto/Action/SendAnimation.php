<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

/**
 * Class SendDocument
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#sendanimation
 */
class SendAnimation implements ActionInterface
{

    /**
     * @var string
     * @Type("string")
     */
    private $chatId;

    /**
     * @var string|resource
     * @Exclude()
     */
    private $animation;

    /**
     * @var int|null
     * @Type("integer")
     */
    private $duration;

    /**
     * @var int|null
     * @Type("int")
     */
    private $width;
    /**
     * @var int|null
     * @Type("int")
     */
    private $height;

    /**
     * @var string|resource|null
     * @Exclude()
     */
    private $thumb;

    /**
     * @var string|null
     * @Type("string")
     */
    private $caption;

    /**
     * @var string|null
     * @Type("string")
     */
    private $parseMode;

    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableNotification;

    /**
     * @var int|null
     * @Type("integer")
     */
    private $replyToMessageId;

    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * SendAnimation constructor.
     * @param string $chatId
     * @param resource|string $animation
     * @param int|null $duration
     * @param int|null $width
     * @param int|null $height
     * @param resource|string|null $thumb
     * @param string|null $caption
     * @param string|null $parseMode
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */
    public function __construct(string $chatId, $animation, ?int $duration, ?int $width, ?int $height, $thumb, ?string $caption, ?string $parseMode, ?bool $disableNotification, ?int $replyToMessageId, $replyMarkup)
    {
        $this->chatId = $chatId;
        $this->animation = $animation;
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
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
     * @return resource|string
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return resource|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
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
     * @return ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null
     */
    public function getReplyMarkup()
    {
        return $this->replyMarkup;
    }
}
