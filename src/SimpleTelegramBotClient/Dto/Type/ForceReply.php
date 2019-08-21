<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class ForceReply
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#forcereply
 */
class ForceReply
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $forceReply;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $selective;

    /**
     * @return bool
     */
    public function isForceReply(): bool
    {
        return $this->forceReply;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
