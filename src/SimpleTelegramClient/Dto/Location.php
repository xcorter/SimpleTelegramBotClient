<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Location
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#location
 */
class Location
{
    /**
     * @var float
     * @Type("type")
     */
    private $longitude;
    /**
     * @var float
     * @Type("type")
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
