<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\EditMessageLiveLocation;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

class EditMessageLiveLocationBuilder
{
    /**
     * @var string|null
     */
    private $chatId;
    /**
     * @var int|null
     */
    private $messageId;
    /**
     * @var string|null
     */
    private $inlineMessageId;
    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $longitude;
    /**
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * EditMessageLiveLocation constructor.
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return EditMessageLiveLocation
     */
    public function build(): EditMessageLiveLocation
    {
        return new EditMessageLiveLocation(
            $this->chatId,
            $this->messageId,
            $this->inlineMessageId,
            $this->latitude,
            $this->longitude,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $chatId
     * @return EditMessageLiveLocationBuilder
     */
    public function setChatId(?string $chatId): EditMessageLiveLocationBuilder
    {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param int|null $messageId
     * @return EditMessageLiveLocationBuilder
     */
    public function setMessageId(?int $messageId): EditMessageLiveLocationBuilder
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @param string|null $inlineMessageId
     * @return EditMessageLiveLocationBuilder
     */
    public function setInlineMessageId(?string $inlineMessageId): EditMessageLiveLocationBuilder
    {
        $this->inlineMessageId = $inlineMessageId;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return EditMessageLiveLocationBuilder
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): EditMessageLiveLocationBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
