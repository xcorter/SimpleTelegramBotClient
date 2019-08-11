<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendVenue;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendVenueBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $longitude;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $address;
    /**
     * @var string|null
     */
    private $foursquareId;
    /**
     * @var string|null
     */
    private $foursquareType;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var int|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    /**
     * SendVenueBuilder constructor.
     * @param string $chatId
     * @param float $latitude
     * @param float $longitude
     * @param string $title
     * @param string $address
     */
    public function __construct(string $chatId, float $latitude, float $longitude, string $title, string $address)
    {
        $this->chatId = $chatId;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->title = $title;
        $this->address = $address;
    }

    /**
     * @return SendVenue
     */
    public function build(): SendVenue
    {
        return new SendVenue(
            $this->chatId,
            $this->latitude,
            $this->longitude,
            $this->title,
            $this->address,
            $this->foursquareId,
            $this->foursquareType,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $foursquareId
     * @return SendVenueBuilder
     */
    public function setFoursquareId(?string $foursquareId): SendVenueBuilder
    {
        $this->foursquareId = $foursquareId;
        return $this;
    }

    /**
     * @param string|null $foursquareType
     * @return SendVenueBuilder
     */
    public function setFoursquareType(?string $foursquareType): SendVenueBuilder
    {
        $this->foursquareType = $foursquareType;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendVenueBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendVenueBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendVenueBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendVenueBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendVenueBuilder
     */
    public function setReplyMarkup($replyMarkup): SendVenueBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
