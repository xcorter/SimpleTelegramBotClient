<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\Update;

class Response
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var array
     * @Type("array<SimpleTelegramBotClient\Dto\Type\Update>")
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
     * @return Update[]
     */
    public function getResult(): array
    {
        return $this->result;
    }
}
