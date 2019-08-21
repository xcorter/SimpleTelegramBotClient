<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\GetUserProfilePhotos;

class GetUserProfilePhotosBuilder
{
    /**
     * @var integer
     */
    private $userId;
    /**
     * @var integer|null
     */
    private $offset;
    /**
     * @var integer|null
     */
    private $limit;

    /**
     * GetUserProfilePhotosBuilder constructor.
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function build(): GetUserProfilePhotos
    {
        return new GetUserProfilePhotos(
            $this->userId,
            $this->offset,
            $this->limit
        );
    }

    /**
     * @param int|null $offset
     * @return GetUserProfilePhotosBuilder
     */
    public function setOffset(?int $offset): GetUserProfilePhotosBuilder
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @param int|null $limit
     * @return GetUserProfilePhotosBuilder
     */
    public function setLimit(?int $limit): GetUserProfilePhotosBuilder
    {
        $this->limit = $limit;
        return $this;
    }
}
