<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class From
{
    /**
     * @var int
     * @Type("int")
     */
    private $id;
    /**
     * @var bool
     * @Type("bool")
     */
    private $isBot;
    /**
     * @var string
     * @Type("string")
     */
    private $firstName;
    /**
     * @var string
     * @Type("string")
     */
    private $lastName;
    /**
     * @var string
     * @Type("string")
     */
    private $username;
    /**
     * @var string
     * @Type("string")
     */
    private $languageCode;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isBot(): bool
    {
        return $this->isBot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}
