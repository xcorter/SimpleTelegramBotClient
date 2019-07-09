<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class VideoNote
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#videonote
 */
class VideoNote
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
    private $length;
    /**
     * @var int
     * @Type("int")
     */
    private $duration;
    /**
     * @var PhotoSize|null
     * @Type("SimpleTelegramClient\Dto\PhotoSize")
     */
    private $thumb;
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
    public function getLength(): int
    {
        return $this->length;
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
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
