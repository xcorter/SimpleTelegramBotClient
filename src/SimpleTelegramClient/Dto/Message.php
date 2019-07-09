<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class Message
{
    /**
     * @var int
     * @Type("int")
     */
    private $messageId;

    /**
     * @var From
     * @Type("SimpleTelegramClient\Dto\From")
     */
    private $from;
    /**
     * @var Chat
     * @Type("SimpleTelegramClient\Dto\Chat")
     */
    private $chat;
    /**
     * @var \DateTimeImmutable
     * @Type("DateTimeImmutable<'U'>")
     */
    private $date;
    /**
     * @var Entity[]
     * @Type("array<SimpleTelegramClient\Dto\Entity>")
     */
    private $entities;

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @return From
     */
    public function getFrom(): From
    {
        return $this->from;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return Entity[]
     */
    public function getEntities(): array
    {
        return $this->entities;
    }
}
