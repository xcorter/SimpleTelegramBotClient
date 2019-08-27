<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ChatPermissions;

/**
 * Class SetChatPermissions
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#setchatpermissions
 */
class SetChatPermissions implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var ChatPermissions
     * @Type("SimpleTelegramBotClient\Dto\Type\ChatPermissions")
     */
    private $permissions;

    /**
     * SetChatPermissions constructor.
     * @param string $chatId
     * @param ChatPermissions $permissions
     */
    public function __construct(string $chatId, ChatPermissions $permissions)
    {
        $this->chatId = $chatId;
        $this->permissions = $permissions;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return ChatPermissions
     */
    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }
}
