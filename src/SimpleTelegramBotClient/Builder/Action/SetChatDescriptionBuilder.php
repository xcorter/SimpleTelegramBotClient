<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SetChatDescription;

class SetChatDescriptionBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|null
     */
    private $description;

    /**
     * SetChatDescriptionBuilder constructor.
     * @param string $chatId
     */
    public function __construct(string $chatId)
    {
        $this->chatId = $chatId;
    }

    /**
     * @param string|null $description
     * @return SetChatDescriptionBuilder
     */
    public function setDescription(?string $description): SetChatDescriptionBuilder
    {
        $this->description = $description;
        return $this;
    }

    public function build(): SetChatDescription
    {
        return new SetChatDescription($this->chatId, $this->description);
    }
}
