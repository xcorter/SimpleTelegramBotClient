<?php

namespace SimpleTelegramBotClient\Builder\Type;

use SimpleTelegramBotClient\Dto\Type\InputMediaVideo;

class InputMediaVideoBuilder
{
    /**
     * @var string
     */
    private $type = 'video';
    /**
     * @var string
     */
    private $media;
    /**
     * @var string|resource|null
     */
    private $thumb;
    /**
     * @var string|null
     */
    private $caption;
    /**
     * @var string|null
     */
    private $parseMode;
    /**
     * @var integer|null
     */
    private $width;
    /**
     * @var integer|null
     */
    private $height;
    /**
     * @var integer|null
     */
    private $duration;
    /**
     * @var bool|null
     */
    private $supportsStreaming;

    /**
     * InputMediaVideoBuilder constructor.
     * @param string $media
     */
    public function __construct(string $media)
    {
        $this->media = $media;
    }

    public function build(): InputMediaVideo
    {
        return new InputMediaVideo(
            $this->type,
            $this->media,
            $this->thumb,
            $this->caption,
            $this->parseMode,
            $this->width,
            $this->height,
            $this->duration,
            $this->supportsStreaming
        );
    }
}
