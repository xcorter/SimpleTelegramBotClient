<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Chat
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#chat
 */
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
    private $type;
    /**
     * @var string|null
     * @Type("string")
     */
    private $title;
    /**
     * @var string|null
     * @Type("string")
     */
    private $username;
    /**
     * @var string|null
     * @Type("string")
     */
    private $firstName;
    /**
     * @var string|null
     * @Type("string")
     */
    private $lastName;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $allMembersAreAdministrators;
    /**
     * @var ChatPhoto|null
     * @Type("SimpleTelegramClient\Dto\ChatPhoto")
     */
    private $photo;
    /**
     * @var string|null
     * @Type("string")
     */
    private $description;
    /**
     * @var string|null
     * @Type("string")
     */
    private $inviteLink;
    /**
     * @var Message|null
     * @Type("SimpleTelegramClient\Dto\Message")
     */
    private $pinnedMessage;
    /**
     * @var string|null
     * @Type("string")
     */
    private $stickerSetName;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canSetStickerSet;

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
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
    public function getFirstName(): ?string
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
     * @return bool|null
     */
    public function getAllMembersAreAdministrators(): ?bool
    {
        return $this->allMembersAreAdministrators;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }
}
