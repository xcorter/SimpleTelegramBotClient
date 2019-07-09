<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class MessageEntity
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity
{
    /**
     * @var int
     * @Type("int")
     */
    private $length;
    /**
     * @var int
     * @Type("int")
     */
    private $offset;
    /**
     * @var string
     * @Type("string")
     */
    private $type;
    /**
     * @var string|null
     * @Type("string")
     */
    private $url;
    /**
     * @var User|null
     * @Type("SimpleTelegramClient\Dto\User")
     */
    private $user;

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }
}
