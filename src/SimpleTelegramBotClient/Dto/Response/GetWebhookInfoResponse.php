<?php

namespace SimpleTelegramBotClient\Dto\Response;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Type\WebhookInfo;

class GetWebhookInfoResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $ok;
    /**
     * @var WebhookInfo
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
     * @return WebhookInfo
     */
    public function getResult(): WebhookInfo
    {
        return $this->result;
    }
}
