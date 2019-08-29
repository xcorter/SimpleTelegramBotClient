<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\Chat;

class GetChatResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var Chat
     * @Type("SimpleTelegramBotClient\Dto\Type\Chat")
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
     * @return Chat
     */
    public function getResult(): Chat
    {
        return $this->result;
    }
}
