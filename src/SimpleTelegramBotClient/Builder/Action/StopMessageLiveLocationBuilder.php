<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\StopMessageLiveLocation;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

class StopMessageLiveLocationBuilder
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
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * @return StopMessageLiveLocation
     */
    public function build(): StopMessageLiveLocation
    {
        return new StopMessageLiveLocation(
            $this->chatId,
            $this->messageId,
            $this->inlineMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $chatId
     * @return StopMessageLiveLocationBuilder
     */
    public function setChatId(?string $chatId): StopMessageLiveLocationBuilder
    {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param int|null $messageId
     * @return StopMessageLiveLocationBuilder
     */
    public function setMessageId(?int $messageId): StopMessageLiveLocationBuilder
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @param string|null $inlineMessageId
     * @return StopMessageLiveLocationBuilder
     */
    public function setInlineMessageId(?string $inlineMessageId): StopMessageLiveLocationBuilder
    {
        $this->inlineMessageId = $inlineMessageId;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return StopMessageLiveLocationBuilder
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): StopMessageLiveLocationBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
