<?php

namespace SimpleTelegramBotClient\Builder\Type;

use SimpleTelegramBotClient\Dto\InputMediaPhoto;

class InputMediaPhotoBuilder
{
    /**
     * @var string
     */
    private $type = 'photo';
    /**
     * @var string
     */
    private $media;
    /**
     * @var string|null
     */
    private $caption;
    /**
     * @var string|null
     */
    private $parseMode;

    /**
     * InputMediaPhotoBuilder constructor.
     * @param string $media
     */
    public function __construct(string $media)
    {
        $this->media = $media;
    }

    public function build(): InputMediaPhoto
    {
        return new InputMediaPhoto(
            $this->type,
            $this->media,
            $this->caption,
            $this->parseMode
        );
    }

    /**
     * @param string|null $caption
     * @return InputMediaPhotoBuilder
     */
    public function setCaption(?string $caption): InputMediaPhotoBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return InputMediaPhotoBuilder
     */
    public function setParseMode(?string $parseMode): InputMediaPhotoBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }
}
