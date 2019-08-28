<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class ExportChatInviteLink
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#exportchatinvitelink
 */
class ExportChatInviteLink implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;

    /**
     * ExportChatInviteLink constructor.
     * @param string $chatId
     */
    public function __construct(string $chatId)
    {
        $this->chatId = $chatId;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }
}
