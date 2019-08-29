<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SetChatPhoto;

class SetChatPhotoBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|resource
     */
    private $photo;

    /**
     * SetChatPhoto constructor.
     * @param string $chatId
     * @param resource|string $photo
     */
    public function __construct(string $chatId, $photo)
    {
        $this->chatId = $chatId;
        $this->photo = $photo;
    }

    public function build(): SetChatPhoto
    {
        return new SetChatPhoto(
            $this->chatId,
            $this->photo
        );
    }
}
