<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

class SimpleResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var bool
     * @Type("bool")
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
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }
}
