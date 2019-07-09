<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class ChatPhoto
{
    /**
     * @var string
     * @Type("string")
     */
    private $smallFileId;
    /**
     * @var string
     * @Type("string")
     */
    private $bigFileId;

    /**
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    /**
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }
}
