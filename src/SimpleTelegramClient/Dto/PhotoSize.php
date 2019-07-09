<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class PhotoSize
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#photosize
 */
class PhotoSize
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
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
}
