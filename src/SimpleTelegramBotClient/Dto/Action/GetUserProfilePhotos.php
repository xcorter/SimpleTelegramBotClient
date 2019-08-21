<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class GetUserProfilePhotos
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#getuserprofilephotos
 */
class GetUserProfilePhotos implements ActionInterface
{
    /**
     * @var integer
     * @Type("integer")
     */
    private $userId;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $offset;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $limit;

    /**
     * GetUserProfilePhotos constructor.
     * @param int $userId
     * @param int|null $offset
     * @param int|null $limit
     */
    public function __construct(int $userId, ?int $offset, ?int $limit)
    {
        $this->userId = $userId;
        $this->offset = $offset;
        $this->limit = $limit;
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
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }
}
