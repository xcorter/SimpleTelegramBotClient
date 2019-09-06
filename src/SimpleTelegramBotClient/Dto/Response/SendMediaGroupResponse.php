<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\Message;

class SendMediaGroupResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var Message[]
     * @Type("array<SimpleTelegramBotClient\Dto\Type\Message>")
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
     * @return Message[]
     */
    public function getResult(): array
    {
        return $this->result;
    }
}
