<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class Response
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var array
     * @Type("array<SimpleTelegramClient\Dto\Update>")
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
