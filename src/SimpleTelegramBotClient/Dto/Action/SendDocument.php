<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

/**
 * Class SendDocument
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#senddocument
 */
class SendDocument implements ActionInterface
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
    private $document;
    /**
     * @var string|null
     * @Type("string")
     */
    private $caption;
    /**
     * @var string|resource|null
     * @Exclude()
     */
    private $thumb;
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
     * SendAudio constructor.
     * @param string $chatId
     * @param resource|string $document
     * @param string|null $caption
     * @param string|null $thumb
     * @param string|null $parseMode
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */

    public function __construct(
        string $chatId,
        $document,
        ?string $caption,
        $thumb,
        ?string $parseMode,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->document = $document;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
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
    public function getDocument()
    {
        return $this->document;
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
