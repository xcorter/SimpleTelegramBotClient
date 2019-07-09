<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class GetMeResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var User
     * @Type("SimpleTelegramClient\Dto\User")
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
     * @return User
     */
    public function getResult(): User
    {
        return $this->result;
    }
}
