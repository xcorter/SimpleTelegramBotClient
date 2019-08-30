<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;

class Error
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
    private $errorCode;
    /**
     * @var string
     * @Type("string")
     */
    private $description;

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
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
