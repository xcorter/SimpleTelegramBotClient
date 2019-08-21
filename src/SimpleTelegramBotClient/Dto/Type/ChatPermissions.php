<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class ChatPermissions
 * @package SimpleTelegramBotClient\Dto\Type
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 */
class ChatPermissions
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $canSendMessages;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canSendMediaMessages;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canSendPolls;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canSendOtherMessages;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canAddWebPagePreviews;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canChangeInfo;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canInviteUsers;
    /**
     * @var bool
     * @Type("bool")
     */
    private $canPinMessages;

    /**
     * ChatPermissions constructor.
     * @param bool $canSendMessages
     * @param bool $canSendMediaMessages
     * @param bool $canSendPolls
     * @param bool $canSendOtherMessages
     * @param bool $canAddWebPagePreviews
     * @param bool $canChangeInfo
     * @param bool $canInviteUsers
     * @param bool $canPinMessages
     */
    public function __construct(
        bool $canSendMessages,
        bool $canSendMediaMessages,
        bool $canSendPolls,
        bool $canSendOtherMessages,
        bool $canAddWebPagePreviews,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPinMessages
    ) {
        $this->canSendMessages = $canSendMessages;
        $this->canSendMediaMessages = $canSendMediaMessages;
        $this->canSendPolls = $canSendPolls;
        $this->canSendOtherMessages = $canSendOtherMessages;
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        $this->canChangeInfo = $canChangeInfo;
        $this->canInviteUsers = $canInviteUsers;
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * @return bool
     */
    public function isCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    /**
     * @return bool
     */
    public function isCanSendMediaMessages(): bool
    {
        return $this->canSendMediaMessages;
    }

    /**
     * @return bool
     */
    public function isCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    /**
     * @return bool
     */
    public function isCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @return bool
     */
    public function isCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @return bool
     */
    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @return bool
     */
    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @return bool
     */
    public function isCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }
}
