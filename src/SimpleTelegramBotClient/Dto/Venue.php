<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Venue
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#message
 */
class Venue
{
    /**
     * @var Location
     * @Type("SimpleTelegramBotClient\Dto\Location")
     */
    private $location;
    /**
     * @var string
     * @Type("string")
     */
    private $title;
    /**
     * @var string
     * @Type("string")
     */
    private $address;
    /**
     * @var string|null
     * @Type("string")
     */
    private $foursquareId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $foursquareType;

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    /**
     * @return string|null
     */
    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }
}
