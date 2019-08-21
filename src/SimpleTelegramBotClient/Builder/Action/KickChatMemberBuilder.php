<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\KickChatMember;

class KickChatMemberBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var integer
     */
    private $userId;
    /**
     * @var integer|null
     */
    private $untilDate;

    /**
     * KickChatMemberBuilder constructor.
     * @param string $chatId
     * @param int $userId
     */
    public function __construct(string $chatId, int $userId)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
    }

    public function build(): KickChatMember
    {
        return new KickChatMember(
            $this->chatId,
            $this->userId,
            $this->untilDate
        );
    }

    /**
     * @param int|null $untilDate
     * @return KickChatMemberBuilder
     */
    public function setUntilDate(?int $untilDate): KickChatMemberBuilder
    {
        $this->untilDate = $untilDate;
        return $this;
    }
}
