<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class UserProfilePhotos
 * @package SimpleTelegramBotClient\Dto
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 */
class UserProfilePhotos
{
    /**
     * @var int
     * @Type("int")
     */
    private $totalCount;
    /**
     * @var array
     * @Type("array<array<SimpleTelegramBotClient\Dto\PhotoSize>>")
     */
    private $photos;

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return array
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
}
