<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Contact
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#contact
 */
class Contact
{
    /**
     * @var string
     * @Type("string")
     */
    private $phoneNumber;
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
     * @var int|null
     * @Type("int")
     */
    private $userId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $vcard;

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
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
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return string|null
     */
    public function getVcard(): ?string
    {
        return $this->vcard;
    }
}
