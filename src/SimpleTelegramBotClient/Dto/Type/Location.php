<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class Location
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#location
 */
class Location
{
    /**
     * @var float
     * @Type("float")
     */
    private $longitude;
    /**
     * @var float
     * @Type("float")
     */
    private $latitude;

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
}
