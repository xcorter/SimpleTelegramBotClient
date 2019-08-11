<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;

/**
 * Class InputMediaVideo
 * @package SimpleTelegramBotClient\Dto
 *
 * @link https://core.telegram.org/bots/api#inputmediavideo
 */
class InputMediaVideo
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
     * @var string|resource|null
     * @Exclude()
     */
    private $thumb;
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
     * @var integer|null
     * @Type("integer")
     */
    private $width;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $height;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $duration;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $supportsStreaming;

    /**
     * InputMediaVideo constructor.
     * @param string $type
     * @param string $media
     * @param resource|string|null $thumb
     * @param string|null $caption
     * @param string|null $parseMode
     * @param int|null $width
     * @param int|null $height
     * @param int|null $duration
     * @param bool|null $supportsStreaming
     */
    public function __construct(
        string $type,
        string $media,
        $thumb,
        ?string $caption,
        ?string $parseMode,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supportsStreaming
    ) {
        $this->type = $type;
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->supportsStreaming = $supportsStreaming;
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
     * @return resource|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
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

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @return bool|null
     */
    public function getSupportsStreaming(): ?bool
    {
        return $this->supportsStreaming;
    }
}
