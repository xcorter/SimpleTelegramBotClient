<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

class PromoteChatMember implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var int
     * @Type("int")
     */
    private $userId;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canChangeInfo;
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
    private $canInviteUsers;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canRestrictMembers;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canPinMessages;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $canPromoteMembers;

    /**
     * PromoteChatMember constructor.
     * @param string $chatId
     * @param int $userId
     * @param bool|null $canChangeInfo
     * @param bool|null $canPostMessages
     * @param bool|null $canEditMessages
     * @param bool|null $canDeleteMessages
     * @param bool|null $canInviteUsers
     * @param bool|null $canRestrictMembers
     * @param bool|null $canPinMessages
     * @param bool|null $canPromoteMembers
     */
    public function __construct(
        string $chatId,
        int $userId,
        ?bool $canChangeInfo,
        ?bool $canPostMessages,
        ?bool $canEditMessages,
        ?bool $canDeleteMessages,
        ?bool $canInviteUsers,
        ?bool $canRestrictMembers,
        ?bool $canPinMessages,
        ?bool $canPromoteMembers
    ) {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->canChangeInfo = $canChangeInfo;
        $this->canPostMessages = $canPostMessages;
        $this->canEditMessages = $canEditMessages;
        $this->canDeleteMessages = $canDeleteMessages;
        $this->canInviteUsers = $canInviteUsers;
        $this->canRestrictMembers = $canRestrictMembers;
        $this->canPinMessages = $canPinMessages;
        $this->canPromoteMembers = $canPromoteMembers;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
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
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
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
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool
    {
        return $this->canPromoteMembers;
    }
}
