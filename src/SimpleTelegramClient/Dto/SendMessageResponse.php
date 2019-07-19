<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class SendMessageResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var Message
     * @Type("SimpleTelegramClient\Dto\Message")
     */
    private $result;

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->ok;
    }

    /**
     * @return Message
     */
    public function getResult(): Message
    {
        return $this->result;
    }
}
