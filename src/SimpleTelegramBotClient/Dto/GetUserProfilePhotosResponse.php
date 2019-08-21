<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

class GetUserProfilePhotosResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var UserProfilePhotos
     * @Type("SimpleTelegramBotClient\Dto\UserProfilePhotos")
     */
    private $result;

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->ok;
    }

    /**
     * @return UserProfilePhotos
     */
    public function getResult(): UserProfilePhotos
    {
        return $this->result;
    }
}
