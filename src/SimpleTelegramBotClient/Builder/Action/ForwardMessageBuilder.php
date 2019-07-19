<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\ForwardMessage;

class ForwardMessageBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $fromChatId;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var int
     */
    private $messageId;

    /**
     * ForwardMessageBuilder constructor.
     * @param string $chatId
     * @param string $fromChatId
     * @param int $messageId
     */
    public function __construct(string $chatId, string $fromChatId, int $messageId)
    {
        $this->chatId = $chatId;
        $this->fromChatId = $fromChatId;
        $this->messageId = $messageId;
    }

    /**
     * @param bool|null $disableNotification
     * @return ForwardMessageBuilder
     */
    public function setDisableNotification(?bool $disableNotification): ForwardMessageBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    public function build(): ForwardMessage
    {
        return new ForwardMessage(
            $this->chatId,
            $this->fromChatId,
            $this->disableNotification,
            $this->messageId
        );
    }
}
