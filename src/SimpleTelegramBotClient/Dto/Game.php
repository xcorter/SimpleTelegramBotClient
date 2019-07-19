<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Game
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#game
 */
class Game
{
    /**
     * @var string
     * @Type("string")
     */
    private $title;
    /**
     * @var string
     * @Type("string")
     */
    private $description;
    /**
     * @var PhotoSize[]
     * @Type("array<SimpleTelegramBotClient\Dto\PhotoSize>")
     */
    private $photo;
    /**
     * @var string|null
     * @Type("string")
     */
    private $text;
    /**
     * @var MessageEntity[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\MessageEntity>")
     */
    private $textEntities;
    /**
     * @var Animation|null
     * @Type("SimpleTelegramBotClient\Dto\Animation")
     */
    private $animation;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
