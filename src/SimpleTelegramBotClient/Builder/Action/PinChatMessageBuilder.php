<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\PinChatMessage;

class PinChatMessageBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var integer
     */
    private $messageId;
    /**
     * @var bool|null
     */
    private $disableNotification;

    /**
     * PinChatMessageBuilder constructor.
     * @param string $chatId
     * @param int $messageId
     */
    public function __construct(string $chatId, int $messageId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    /**
     * @param bool|null $disableNotification
     * @return PinChatMessageBuilder
     */
    public function setDisableNotification(?bool $disableNotification): PinChatMessageBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    public function build(): PinChatMessage
    {
        return new PinChatMessage($this->chatId, $this->messageId, $this->disableNotification);
    }
}
