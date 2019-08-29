<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;

/**
 * Class SetChatPhoto
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#setchatphoto
 */
class SetChatPhoto implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var string|resource
     * @Exclude()
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

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return resource|string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
