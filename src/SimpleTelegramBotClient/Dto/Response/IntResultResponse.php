<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;

class IntResultResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var int
     * @Type("int")
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
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }
}
