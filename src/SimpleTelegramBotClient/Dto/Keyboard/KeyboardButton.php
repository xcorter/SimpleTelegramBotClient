<?php

namespace SimpleTelegramBotClient\Dto\Keyboard;

use JMS\Serializer\Annotation\Type;

class KeyboardButton
{
    /**
     * @var string
     * @Type("string")
     */
    private $text;
    /**
     * @var bool|null
     * @Type("string")
     */
    private $requestContact;
    /**
     * @var bool|null
     * @Type("string")
     */
    private $requestLocation;

    /**
     * KeyboardButton constructor.
     * @param string $text
     * @param bool|null $requestContact
     * @param bool|null $requestLocation
     */
    public function __construct(string $text, ?bool $requestContact, ?bool $requestLocation)
    {
        $this->text = $text;
        $this->requestContact = $requestContact;
        $this->requestLocation = $requestLocation;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return bool|null
     */
    public function getRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    /**
     * @return bool|null
     */
    public function getRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }
}
