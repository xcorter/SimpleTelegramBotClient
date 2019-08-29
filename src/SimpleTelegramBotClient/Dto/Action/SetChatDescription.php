<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class SetChatDescription
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#setchatdescription
 */
class SetChatDescription implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $description;

    /**
     * SetChatDescription constructor.
     * @param string $chatId
     * @param string|null $description
     */
    public function __construct(string $chatId, ?string $description)
    {
        $this->chatId = $chatId;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
