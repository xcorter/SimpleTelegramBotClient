<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class UserProfilePhotos
 * @package SimpleTelegramBotClient\Dto\Type
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
     * @Type("array<array<SimpleTelegramBotClient\Dto\Type\PhotoSize>>")
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
