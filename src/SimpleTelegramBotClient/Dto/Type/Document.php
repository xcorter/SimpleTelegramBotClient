<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class Document
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#document
 */
class Document
{
    /**
     * @var string
     * @Type("string")
     */
    private $fileId;
    /**
     * @var PhotoSize|null
     * @Type("SimpleTelegramBotClient\Dto\Type\PhotoSize")
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
     * @var string|null
     * @Type("string")
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
     * @return string|null
     */
    public function getFileSize(): ?string
    {
        return $this->fileSize;
    }
}
