<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\ExportChatInviteLink;

class ExportChatInviteLinkBuilder
{
    /**
     * @var string
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

    public function build(): ExportChatInviteLink
    {
        return new ExportChatInviteLink($this->chatId);
    }
}
