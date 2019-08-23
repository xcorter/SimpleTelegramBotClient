<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

/**
 * Class SendVideoNote
 * @package SimpleTelegramBotClient\Dto\Action
 * @link https://core.telegram.org/bots/api#sendvideonote
 */
class SendVideoNote implements ActionInterface
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
    private $videoNote;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $duration;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $length;
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
     * @var integer|null
     * @Type("integer")
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * SendVideoNote constructor.
     * @param string $chatId
     * @param resource|string $videoNote
     * @param int|null $duration
     * @param int|null $length
     * @param resource|string|null $thumb
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */
    public function __construct(
        string $chatId,
        $videoNote,
        ?int $duration,
        ?int $length,
        $thumb,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->videoNote = $videoNote;
        $this->duration = $duration;
        $this->length = $length;
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
    public function getVideoNote()
    {
        return $this->videoNote;
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
    public function getLength(): ?int
    {
        return $this->length;
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
