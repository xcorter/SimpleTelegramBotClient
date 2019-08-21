<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\RestrictChatMember;
use SimpleTelegramBotClient\Dto\Type\ChatPermissions;

class RestrictChatMemberBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var integer
     */
    private $userId;
    /**
     * @var ChatPermissions
     */
    private $permissions;
    /**
     * @var integer|null
     */
    private $untilDate;

    /**
     * RestrictChatMemberBuilder constructor.
     * @param string $chatId
     * @param int $userId
     * @param ChatPermissions $permissions
     */
    public function __construct(string $chatId, int $userId, ChatPermissions $permissions)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->permissions = $permissions;
    }

    /**
     * @param int|null $untilDate
     * @return RestrictChatMemberBuilder
     */
    public function setUntilDate(?int $untilDate): RestrictChatMemberBuilder
    {
        $this->untilDate = $untilDate;
        return $this;
    }

    public function build(): RestrictChatMember
    {
        return new RestrictChatMember(
            $this->chatId,
            $this->userId,
            $this->permissions,
            $this->untilDate
        );
    }
}
