<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class InputMediaPhoto
 * @package SimpleTelegramBotClient\Dto\Type
 *
 * @link https://core.telegram.org/bots/api#inputmediaphoto
 */
class InputMediaPhoto
{
    /**
     * @var string
     * @Type("string")
     */
    private $type;
    /**
     * @var string
     * @Type("string")
     */
    private $media;
    /**
     * @var string|null
     * @Type("string")
     */
    private $caption;
    /**
     * @var string|null
     * @Type("string")
     */
    private $parseMode;

    /**
     * InputMediaPhoto constructor.
     * @param string $type
     * @param string $media
     * @param string|null $caption
     * @param string|null $parseMode
     */
    public function __construct(string $type, string $media, ?string $caption, ?string $parseMode)
    {
        $this->type = $type;
        $this->media = $media;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }
}
