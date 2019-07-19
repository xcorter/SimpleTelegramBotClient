<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Voice
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#voice
 */
class Voice
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
    public function getDuration(): int
    {
        return $this->duration;
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
