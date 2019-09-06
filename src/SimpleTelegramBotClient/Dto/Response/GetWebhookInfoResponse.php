<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\UserProfilePhotos;

class GetWebhookInfoResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var UserProfilePhotos
     * @Type("SimpleTelegramBotClient\Dto\Type\WebhookInfo")
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
