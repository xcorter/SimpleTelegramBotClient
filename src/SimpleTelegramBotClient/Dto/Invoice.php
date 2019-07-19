<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Invoice
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#invoice
 */
class Invoice
{
    /**
     * @var string
     * @Type("string")
     */
    private $title;
    /**
     * @var string
     * @Type("string")
     */
    private $description;
    /**
     * @var string
     * @Type("string")
     */
    private $startParameter;
    /**
     * @var string
     * @Type("string")
     */
    private $currency;
    /**
     * @var int
     * @Type("int")
     */
    private $totalAmount;

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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }
}
