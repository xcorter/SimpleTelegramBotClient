<?php

namespace SimpleTelegramClient\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Poll
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#poll
 */
class Poll
{
    /**
     * @var string
     * @Type("string")
     */
    private $id;
    /**
     * @var string
     * @Type("string")
     */
    private $question;
    /**
     * @var PollOption[]
     * @Type("array<SimpleTelegramClient\Dto\PollOption>")
     */
    private $options;
    /**
     * @var bool
     * @Type("bool")
     */
    private $isClosed;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->isClosed;
    }
}
