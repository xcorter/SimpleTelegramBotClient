<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class ForwardMessage
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#forwardmessage
 */
class ForwardMessage implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var string
     * @Type("string")
     */
    private $fromChatId;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableNotification;
    /**
     * @var int
     * @Type("integer")
     */
    private $messageId;

    /**
     * ForwardMessage constructor.
     * @param string $chatId
     * @param string $fromChatId
     * @param bool|null $disableNotification
     * @param int $messageId
     */
    public function __construct(string $chatId, string $fromChatId, ?bool $disableNotification, int $messageId)
    {
        $this->chatId = $chatId;
        $this->fromChatId = $fromChatId;
        $this->disableNotification = $disableNotification;
        $this->messageId = $messageId;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return string
     */
    public function getFromChatId(): string
    {
        return $this->fromChatId;
    }

    /**
     * @return bool|null
     */
    public function getDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
