<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Animation
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#animation
 */
class Animation
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
     * @var int
     * @Type("int")
     */
    private $duration;
    /**
     * @var PhotoSize|null
     * @Type("SimpleTelegramBotClient\Dto\PhotoSize")
     */
    private $thumb;
    /**
     * @var string|null
     * @Type("string")
     */
    private $fileName;
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
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
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
    public function getFileName(): ?string
    {
        return $this->fileName;
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
