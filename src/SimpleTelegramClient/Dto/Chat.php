<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class Chat
{
    /**
     * @var int
     * @Type("int")
     */
    private $id;
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
    private $type;
    /**
     * @var string
     * @Type("string")
     */
    private $username;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}
