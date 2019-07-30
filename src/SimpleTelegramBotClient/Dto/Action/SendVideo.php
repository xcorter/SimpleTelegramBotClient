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
 * @link https://core.telegram.org/bots/api#sendvideo
 */
class SendVideo
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
    private $video;

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
    private $supports_streaming;

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
     * SendVideo constructor.
     * @param string $chatId
     * @param resource|string $video
     * @param int|null $duration
     * @param int|null $width
     * @param int|null $height
     * @param resource|string|null $thumb
     * @param string|null $caption
     * @param string|null $parseMode
     * @param bool|null $supports_streaming
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */
    public function __construct(
        string $chatId,
        $video,
        ?int $duration,
        ?int $width,
        ?int $height,
        $thumb,
        ?string $caption,
        ?string $parseMode,
        ?bool $supports_streaming,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->video = $video;
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->supports_streaming = $supports_streaming;
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
    public function getVideo()
    {
        return $this->video;
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
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int/null
     */
    public function getHeight(): int
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
    public function getSupportsStreaming(): ?bool
    {
        return $this->supports_streaming;
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