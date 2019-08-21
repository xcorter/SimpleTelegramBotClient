<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class KickChatMember
 * @package SimpleTelegramBotClient\Builder\Action
 *
 * @link https://core.telegram.org/bots/api#getuserprofilephotos
 */
class KickChatMember implements ActionInterface
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
     * @var integer|null
     * @Type("integer")
     */
    private $untilDate;

    /**
     * KickChatMember constructor.
     * @param string $chatId
     * @param int $userId
     * @param int|null $untilDate
     */
    public function __construct(string $chatId, int $userId, ?int $untilDate)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
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
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }
}
