<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\PromoteChatMember;

class PromoteChatMemberBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var int
     */
    private $userId;
    /**
     * @var bool|null
     */
    private $canChangeInfo;
    /**
     * @var bool|null
     */
    private $canPostMessages;
    /**
     * @var bool|null
     */
    private $canEditMessages;
    /**
     * @var bool|null
     */
    private $canDeleteMessages;
    /**
     * @var bool|null
     */
    private $canInviteUsers;
    /**
     * @var bool|null
     */
    private $canRestrictMembers;
    /**
     * @var bool|null
     */
    private $canPinMessages;
    /**
     * @var bool|null
     */
    private $canPromoteMembers;

    /**
     * PromoteChatMemberBuilder constructor.
     * @param string $chatId
     * @param int $userId
     */
    public function __construct(string $chatId, int $userId)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
    }

    /**
     * @return PromoteChatMember
     */
    public function build(): PromoteChatMember
    {
        return new PromoteChatMember(
            $this->chatId,
            $this->userId,
            $this->canChangeInfo,
            $this->canPostMessages,
            $this->canEditMessages,
            $this->canDeleteMessages,
            $this->canInviteUsers,
            $this->canRestrictMembers,
            $this->canPinMessages,
            $this->canPromoteMembers
        );
    }

    /**
     * @param bool|null $canChangeInfo
     * @return PromoteChatMemberBuilder
     */
    public function setCanChangeInfo(?bool $canChangeInfo): PromoteChatMemberBuilder
    {
        $this->canChangeInfo = $canChangeInfo;
        return $this;
    }

    /**
     * @param bool|null $canPostMessages
     * @return PromoteChatMemberBuilder
     */
    public function setCanPostMessages(?bool $canPostMessages): PromoteChatMemberBuilder
    {
        $this->canPostMessages = $canPostMessages;
        return $this;
    }

    /**
     * @param bool|null $canEditMessages
     * @return PromoteChatMemberBuilder
     */
    public function setCanEditMessages(?bool $canEditMessages): PromoteChatMemberBuilder
    {
        $this->canEditMessages = $canEditMessages;
        return $this;
    }

    /**
     * @param bool|null $canDeleteMessages
     * @return PromoteChatMemberBuilder
     */
    public function setCanDeleteMessages(?bool $canDeleteMessages): PromoteChatMemberBuilder
    {
        $this->canDeleteMessages = $canDeleteMessages;
        return $this;
    }

    /**
     * @param bool|null $canInviteUsers
     * @return PromoteChatMemberBuilder
     */
    public function setCanInviteUsers(?bool $canInviteUsers): PromoteChatMemberBuilder
    {
        $this->canInviteUsers = $canInviteUsers;
        return $this;
    }

    /**
     * @param bool|null $canRestrictMembers
     * @return PromoteChatMemberBuilder
     */
    public function setCanRestrictMembers(?bool $canRestrictMembers): PromoteChatMemberBuilder
    {
        $this->canRestrictMembers = $canRestrictMembers;
        return $this;
    }

    /**
     * @param bool|null $canPinMessages
     * @return PromoteChatMemberBuilder
     */
    public function setCanPinMessages(?bool $canPinMessages): PromoteChatMemberBuilder
    {
        $this->canPinMessages = $canPinMessages;
        return $this;
    }

    /**
     * @param bool|null $canPromoteMembers
     * @return PromoteChatMemberBuilder
     */
    public function setCanPromoteMembers(?bool $canPromoteMembers): PromoteChatMemberBuilder
    {
        $this->canPromoteMembers = $canPromoteMembers;
        return $this;
    }
}
