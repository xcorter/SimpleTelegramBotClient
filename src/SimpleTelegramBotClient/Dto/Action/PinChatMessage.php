<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class PinChatMessage
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#pinchatmessage
 */
class PinChatMessage implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var integer
     * @Type("integer")
     */
    private $messageId;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableNotification;

    /**
     * PinChatMessage constructor.
     * @param string $chatId
     * @param int $messageId
     * @param bool|null $disableNotification
     */
    public function __construct(string $chatId, int $messageId, ?bool $disableNotification)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->disableNotification = $disableNotification;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @return bool|null
     */
    public function getDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }
}
