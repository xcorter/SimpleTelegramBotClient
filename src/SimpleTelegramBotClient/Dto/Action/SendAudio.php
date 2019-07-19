<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

/**
 * Class SendAudio
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#sendaudio
 */
class SendAudio
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
    private $audio;
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
     * @var int|null
     * @Type("integer")
     */
    private $duration;
    /**
     * @var string|null
     * @Type("string")
     */
    private $performer;
    /**
     * @var string|null
     * @Type("string")
     */
    private $title;
    /**
     * @var string|resource|null
     * @Exclude()
     */
    private $thumb;
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
     * SendAudio constructor.
     * @param string $chatId
     * @param resource|string $audio
     * @param string|null $caption
     * @param string|null $parseMode
     * @param int|null $duration
     * @param string|null $performer
     * @param string|null $title
     * @param resource|string|null $thumb
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */
    public function __construct(
        string $chatId,
        $audio,
        ?string $caption,
        ?string $parseMode,
        ?int $duration,
        ?string $performer,
        ?string $title,
        $thumb,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->audio = $audio;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->duration = $duration;
        $this->performer = $performer;
        $this->title = $title;
        $this->thumb = $thumb;
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
    public function getAudio()
    {
        return $this->audio;
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
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return resource|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
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
