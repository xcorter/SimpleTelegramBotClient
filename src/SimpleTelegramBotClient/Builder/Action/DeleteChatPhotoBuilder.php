<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\DeleteChatPhoto;

class DeleteChatPhotoBuilder
{
    /**
     * @var string
     */
    private $chatId;

    /**
     * DeleteChatPhoto constructor.
     * @param string|null $chatId
     */
    public function __construct(string $chatId)
    {
        $this->chatId = $chatId;
    }

    public function build(): DeleteChatPhoto
    {
        return new DeleteChatPhoto($this->chatId);
    }
}
