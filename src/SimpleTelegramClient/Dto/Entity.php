<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

class Entity
{
    /**
     * @var int
     * @Type("int")
     */
    private $length;
    /**
     * @var int
     * @Type("int")
     */
    private $offset;
    /**
     * @var string
     * @Type("string")
     */
    private $type;

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
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
