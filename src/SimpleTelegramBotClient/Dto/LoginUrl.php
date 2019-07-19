<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

class LoginUrl
{
    /**
     * @var string
     * @Type("string")
     */
    private $url;
    /**
     * @var string|null
     * @Type("string")
     */
    private $forwardText;
    /**
     * @var string|null
     * @Type("string")
     */
    private $botUsername;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $requestWriteAccess;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getForwardText(): ?string
    {
        return $this->forwardText;
    }

    /**
     * @return string|null
     */
    public function getBotUsername(): ?string
    {
        return $this->botUsername;
    }

    /**
     * @return bool|null
     */
    public function getRequestWriteAccess(): ?bool
    {
        return $this->requestWriteAccess;
    }
}
