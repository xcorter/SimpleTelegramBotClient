<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

/**
 * Class SendPhoto
 * @package SimpleTelegramBotClient\Dto\Action
 * @link https://core.telegram.org/bots/api#sendphoto
 */
class SendPhoto implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var resource|string
     * @Exclude()
     */
    private $photo;
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
     * @Type("int")
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * SendPhoto constructor.
     * @param string $chatId
     * @param resource|string $photo
     * @param string|null $caption
     * @param string|null $parseMode
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     */
    public function __construct(
        string $chatId,
        $photo,
        ?string $caption,
        ?string $parseMode,
        ?bool $disableNotification,
        ?int $replyToMessageId,
        $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->photo = $photo;
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
    public function getPhoto()
    {
        return $this->photo;
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
