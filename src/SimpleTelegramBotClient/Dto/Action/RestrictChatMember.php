<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\ChatPermissions;

/**
 * Class RestrictChatMember
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#restrictchatmember
 */
class RestrictChatMember implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var integer
     * @Type("integer")
     */
    private $userId;
    /**
     * @var ChatPermissions
     * @Type("SimpleTelegramBotClient\Dto\Type\ChatPermissions")
     */
    private $permissions;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $untilDate;

    /**
     * RestrictChatMember constructor.
     * @param string $chatId
     * @param int $userId
     * @param ChatPermissions $permissions
     * @param int|null $untilDate
     */
    public function __construct(string $chatId, int $userId, ChatPermissions $permissions, ?int $untilDate)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->permissions = $permissions;
        $this->untilDate = $untilDate;
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
     * @return ChatPermissions
     */
    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }
}
