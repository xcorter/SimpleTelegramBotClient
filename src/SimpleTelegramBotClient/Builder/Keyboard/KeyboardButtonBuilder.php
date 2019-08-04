<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\KeyboardButton;

class KeyboardButtonBuilder
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var bool|null
     */
    private $requestContact;
    /**
     * @var bool|null
     */
    private $requestLocation;

    /**
     * KeyboardButtonBuilder constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return KeyboardButton
     */
    public function build(): KeyboardButton
    {
        return new KeyboardButton(
            $this->text,
            $this->requestContact,
            $this->requestLocation
        );
    }

    /**
     * @param bool|null $requestContact
     * @return KeyboardButtonBuilder
     */
    public function setRequestContact(?bool $requestContact): KeyboardButtonBuilder
    {
        $this->requestContact = $requestContact;
        return $this;
    }

    /**
     * @param bool|null $requestLocation
     * @return KeyboardButtonBuilder
     */
    public function setRequestLocation(?bool $requestLocation): KeyboardButtonBuilder
    {
        $this->requestLocation = $requestLocation;
        return $this;
    }
}
