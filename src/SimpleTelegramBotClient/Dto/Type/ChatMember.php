<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class ChatMember
 * @package SimpleTelegramBotClient\Dto\Type
 *
 * @link https://core.telegram.org/bots/api#chatmember
 */
class ChatMember
{
    /**
     * @var User
     * @Type("SimpleTelegramBotClient\Dto\Type\User")
     */
    private $user;
    /**
     * @var string
     * @Type("string")
     */
    private $status;
    /**
     * @var int|null
     * @Type("int")
     */
    private $untilDate;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canBeEdited;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canPostMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canEditMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canDeleteMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canRestrictMembers;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canPromoteMembers;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canChangeInfo;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canInviteUsers;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canPinMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $isMember;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canSendMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canSendMediaMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canSendPolls;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canSendOtherMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canAddWebPagePreviews;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }

    /**
     * @return bool|null
     */
    public function getCanBeEdited(): ?bool
    {
        return $this->canBeEdited;
    }

    /**
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->canPostMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteMessages(): ?bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanRestrictMembers(): ?bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool
    {
        return $this->canPromoteMembers;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * @return bool|null
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMediaMessages(): ?bool
    {
        return $this->canSendMediaMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }
}
