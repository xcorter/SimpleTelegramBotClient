<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Constant\ChatAction;
use SimpleTelegramBotClient\Dto\Action\SendChatAction;

class SendChatActionBuilder
{

    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $action;

    /**
     * SendChatAction constructor.
     * @param string $chatId
     * @param string $action
     */
    public function __construct(string $chatId, string $action)
    {
        $this->chatId = $chatId;
        if (!in_array($action, ChatAction::ACTIONS, true)) {
            throw new \UnexpectedValueException('Wrong action');
        }
        $this->action = $action;
    }

    /**
     * @return SendChatAction
     */
    public function build(): SendChatAction
    {
        return new SendChatAction(
            $this->chatId,
            $this->action
        );
    }
}
