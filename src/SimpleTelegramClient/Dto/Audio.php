<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Audio
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#audio
 */
class Audio
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
    private $duration;
    /**
     * @var string|null
     * @Type("string")
     */
    private $performer;
    /**
     * @var string|null
     * @Type("string")
     */
    private $title;
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
     * @var PhotoSize|null
     * @Type("SimpleTelegramClient\Dto\PhotoSize")
     */
    private $thumb;

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
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
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

    /**
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
