<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class SetChatTitle
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#setchattitle
 */
class SetChatTitle implements ActionInterface
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
    private $title;

    /**
     * SetChatTitle constructor.
     * @param string $chatId
     * @param string $title
     */
    public function __construct(string $chatId, string $title)
    {
        $this->chatId = $chatId;
        $this->title = $title;
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
    public function getTitle(): string
    {
        return $this->title;
    }
}
