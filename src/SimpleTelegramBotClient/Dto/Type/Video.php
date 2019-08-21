<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class Video
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#video
 */
class Video
{
    /**
     * @var string
     * @Type("string")
     */
    private $fileId;
    /**
     * @var int
     * @Type("int")
     */
    private $width;
    /**
     * @var int
     * @Type("int")
     */
    private $height;
    /**
     * @var PhotoSize|null
     * @Type("SimpleTelegramBotClient\Dto\Type\PhotoSize")
     */
    private $thumb;
    /**
     * @var string|null
     * @Type("string")
     */
    private $mimeType;
    /**
     * @var int|null
     * @Type("int")
     */
    private $fileSize;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
