<?php

namespace SimpleTelegramClient\Dto;

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
     * @Type("SimpleTelegramClient\Dto\Message")
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
