<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class File
 * @package SimpleTelegramBotClient\Dto
 *
 * @link https://core.telegram.org/bots/api#file
 */
class File
{
    /**
     * @var string
     * @Type("string")
     */
    private $fileId;
    /**
     * @var int|null
     * @Type("int")
     */
    private $fileSize;
    /**
     * @var string|null
     * @Type("string")
     */
    private $filePath;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }
}
