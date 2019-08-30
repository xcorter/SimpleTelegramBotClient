<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ChatMember;

class GetChatAdministratorsResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var ChatMember[]
     * @Type("array<SimpleTelegramBotClient\Dto\Type\ChatMember>")
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
     * @return ChatMember[]
     */
    public function getResult(): array
    {
        return $this->result;
    }
}
