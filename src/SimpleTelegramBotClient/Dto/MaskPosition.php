<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class MaskPosition
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#maskposition
 */
class MaskPosition
{
    /**
     * @var string
     * @Type("string")
     */
    private $point;
    /**
     * @var float
     * @Type("float")
     */
    private $xShift;
    /**
     * @var float
     * @Type("float")
     */
    private $yShift;
    /**
     * @var float
     * @Type("float")
     */
    private $scale;

    /**
     * @return string
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * @return float
     */
    public function getXShift(): float
    {
        return $this->xShift;
    }

    /**
     * @return float
     */
    public function getYShift(): float
    {
        return $this->yShift;
    }

    /**
     * @return float
     */
    public function getScale(): float
    {
        return $this->scale;
    }
}
