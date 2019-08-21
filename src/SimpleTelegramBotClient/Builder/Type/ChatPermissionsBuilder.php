<?php

namespace SimpleTelegramBotClient\Builder\Type;

use SimpleTelegramBotClient\Dto\Type\ChatPermissions;

class ChatPermissionsBuilder
{
    /**
     * @var bool
     */
    private $canSendMessages = false;
    /**
     * @var bool
     */
    private $canSendMediaMessages = false;
    /**
     * @var bool
     */
    private $canSendPolls = false;
    /**
     * @var bool
     */
    private $canSendOtherMessages = false;
    /**
     * @var bool
     */
    private $canAddWebPagePreviews = false;
    /**
     * @var bool
     */
    private $canChangeInfo = false;
    /**
     * @var bool
     */
    private $canInviteUsers = false;
    /**
     * @var bool
     */
    private $canPinMessages = false;

    /**
     * @return ChatPermissions
     */
    public function build(): ChatPermissions
    {
        return new ChatPermissions(
            $this->canSendMessages,
            $this->canSendMediaMessages,
            $this->canSendPolls,
            $this->canSendOtherMessages,
            $this->canAddWebPagePreviews,
            $this->canChangeInfo,
            $this->canInviteUsers,
            $this->canPinMessages
        );
    }

    public function allowAll(): self
    {
        $this->canSendMessages = true;
        $this->canSendMediaMessages = true;
        $this->canSendPolls = true;
        $this->canSendOtherMessages = true;
        $this->canAddWebPagePreviews = true;
        $this->canChangeInfo = true;
        $this->canInviteUsers = true;
        $this->canPinMessages = true;
        return $this;
    }

    public function disallowAll(): self
    {
        $this->canSendMessages = false;
        $this->canSendMediaMessages = false;
        $this->canSendPolls = false;
        $this->canSendOtherMessages = false;
        $this->canAddWebPagePreviews = false;
        $this->canChangeInfo = false;
        $this->canInviteUsers = false;
        $this->canPinMessages = false;
        return $this;
    }

    /**
     * @param bool $canSendMessages
     * @return ChatPermissionsBuilder
     */
    public function setCanSendMessages(bool $canSendMessages): ChatPermissionsBuilder
    {
        $this->canSendMessages = $canSendMessages;
        return $this;
    }

    /**
     * @param bool $canSendMediaMessages
     * @return ChatPermissionsBuilder
     */
    public function setCanSendMediaMessages(bool $canSendMediaMessages): ChatPermissionsBuilder
    {
        $this->canSendMediaMessages = $canSendMediaMessages;
        return $this;
    }

    /**
     * @param bool $canSendPolls
     * @return ChatPermissionsBuilder
     */
    public function setCanSendPolls(bool $canSendPolls): ChatPermissionsBuilder
    {
        $this->canSendPolls = $canSendPolls;
        return $this;
    }

    /**
     * @param bool $canSendOtherMessages
     * @return ChatPermissionsBuilder
     */
    public function setCanSendOtherMessages(bool $canSendOtherMessages): ChatPermissionsBuilder
    {
        $this->canSendOtherMessages = $canSendOtherMessages;
        return $this;
    }

    /**
     * @param bool $canAddWebPagePreviews
     * @return ChatPermissionsBuilder
     */
    public function setCanAddWebPagePreviews(bool $canAddWebPagePreviews): ChatPermissionsBuilder
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        return $this;
    }

    /**
     * @param bool $canChangeInfo
     * @return ChatPermissionsBuilder
     */
    public function setCanChangeInfo(bool $canChangeInfo): ChatPermissionsBuilder
    {
        $this->canChangeInfo = $canChangeInfo;
        return $this;
    }

    /**
     * @param bool $canInviteUsers
     * @return ChatPermissionsBuilder
     */
    public function setCanInviteUsers(bool $canInviteUsers): ChatPermissionsBuilder
    {
        $this->canInviteUsers = $canInviteUsers;
        return $this;
    }

    /**
     * @param bool $canPinMessages
     * @return ChatPermissionsBuilder
     */
    public function setCanPinMessages(bool $canPinMessages): ChatPermissionsBuilder
    {
        $this->canPinMessages = $canPinMessages;
        return $this;
    }
}
