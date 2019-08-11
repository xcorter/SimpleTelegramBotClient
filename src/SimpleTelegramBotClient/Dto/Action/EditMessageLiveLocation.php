<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

/**
 * Class EditMessageLiveLocation
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#editmessagelivelocation
 */
class EditMessageLiveLocation implements ActionInterface
{
    /**
     * @var string|null
     * @Type("string")
     */
    private $chatId;
    /**
     * @var int|null
     * @Type("integer")
     */
    private $messageId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $inlineMessageId;
    /**
     * @var float
     * @Type("float")
     */
    private $latitude;
    /**
     * @var float
     * @Type("float")
     */
    private $longitude;
    /**
     * @var InlineKeyboardMarkup|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * EditMessageLiveLocation constructor.
     * @param string|null $chatId
     * @param int|null $messageId
     * @param string|null $inlineMessageId
     * @param float $latitude
     * @param float $longitude
     * @param InlineKeyboardMarkup|null $replyMarkup
     */
    public function __construct(
        ?string $chatId,
        ?int $messageId,
        ?string $inlineMessageId,
        float $latitude,
        float $longitude,
        ?InlineKeyboardMarkup $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->inlineMessageId = $inlineMessageId;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->replyMarkup = $replyMarkup;
    }

    /**
     * @return string|null
     */
    public function getChatId(): ?string
    {
        return $this->chatId;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
