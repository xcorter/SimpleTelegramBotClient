<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

class GetFileResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var User
     * @Type("SimpleTelegramBotClient\Dto\File")
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