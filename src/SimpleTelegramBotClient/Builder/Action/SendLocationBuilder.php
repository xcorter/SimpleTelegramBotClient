<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendLocation;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendLocationBuilder
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
     * @var int|null
     */
    private $livePeriod;
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
     * SendLocationBuilder constructor.
     * @param string $chatId
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(string $chatId, float $latitude, float $longitude)
    {
        $this->chatId = $chatId;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function build(): SendLocation
    {
        return new SendLocation(
            $this->chatId,
            $this->latitude,
            $this->longitude,
            $this->livePeriod,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param int|null $livePeriod
     * @return SendLocationBuilder
     */
    public function setLivePeriod(?int $livePeriod): SendLocationBuilder
    {
        $this->livePeriod = $livePeriod;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendLocationBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendLocationBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendLocationBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendLocationBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendLocationBuilder
     */
    public function setReplyMarkup($replyMarkup): SendLocationBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
