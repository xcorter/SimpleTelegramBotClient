<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class PollOption
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#polloption
 */
class PollOption
{

    /**
     * @var string
     * @Type("string")
     */
    private $text;
    /**
     * @var int
     * @Type("int")
     */
    private $voterCount;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }
}
