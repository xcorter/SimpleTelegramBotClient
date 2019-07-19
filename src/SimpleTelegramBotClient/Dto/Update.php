<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

class Update
{
    /**
     * @var int
     * @Type("int")
     */
    private $updateId;

    /**
     * @var Message
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $message;

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }
}
