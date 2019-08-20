<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

class SendChatAction implements ActionInterface
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
    private $action;

    /**
     * SendChatAction constructor.
     * @param string $chatId
     * @param string $action
     */
    public function __construct(string $chatId, string $action)
    {
        $this->chatId = $chatId;
        $this->action = $action;
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
    public function getAction(): string
    {
        return $this->action;
    }
}
