<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class Sticker
 * @package SimpleTelegramBotClient\Dto\Type
 * @link https://core.telegram.org/bots/api#sticker
 */
class Sticker
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
    private $emoji;
    /**
     * @var string|null
     * @Type("string")
     */
    private $setName;
    /**
     * @var MaskPosition|null
     * @Type("SimpleTelegramBotClient\Dto\Type\MaskPosition")
     */
    private $maskPosition;
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
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @return string|null
     */
    public function getSetName(): ?string
    {
        return $this->setName;
    }

    /**
     * @return MaskPosition|null
     */
    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
