<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class User
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#user
 */
class User
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
     * @var string|null
     * @Type("string")
     */
    private $lastName;
    /**
     * @var string|null
     * @Type("string")
     */
    private $username;
    /**
     * @var string|null
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
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
