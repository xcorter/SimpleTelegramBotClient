<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SetChatPermissions;
use SimpleTelegramBotClient\Dto\Type\ChatPermissions;

class SetChatPermissionsBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var ChatPermissions
     */
    private $permissions;

    /**
     * SetChatPermissionsBuilder constructor.
     * @param string $chatId
     * @param ChatPermissions $permissions
     */
    public function __construct(string $chatId, ChatPermissions $permissions)
    {
        $this->chatId = $chatId;
        $this->permissions = $permissions;
    }

    public function build(): SetChatPermissions
    {
        return new SetChatPermissions($this->chatId, $this->permissions);
    }
}
