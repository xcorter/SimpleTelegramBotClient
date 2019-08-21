<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\UnbanChatMember;

class UnbanChatMemberBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var int
     */
    private $userId;

    /**
     * UnbanChatMemberBuilder constructor.
     * @param string $chatId
     * @param int $userId
     */
    public function __construct(string $chatId, int $userId)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
    }

    public function build(): UnbanChatMember
    {
        return new UnbanChatMember($this->chatId, $this->userId);
    }
}
