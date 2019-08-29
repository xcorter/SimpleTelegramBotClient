<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SetChatTitle;

/**
 * Class SetChatTitleBuilder
 * @package SimpleTelegramBotClient\Builder\Action
 */
class SetChatTitleBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $title;

    /**
     * SetChatTitleBuilder constructor.
     * @param string $chatId
     * @param string $photo
     */
    public function __construct(string $chatId, string $title)
    {
        $this->chatId = $chatId;
        $this->title = $title;
    }

    public function build(): SetChatTitle
    {
        return new SetChatTitle($this->chatId, $this->title);
    }
}
