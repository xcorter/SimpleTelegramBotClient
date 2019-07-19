<?php

namespace SimpleTelegramClient\Dto\Keyboard;

class ArrayKeyboardButton
{

    private $inlineKeyboardButtons;

    public function __construct(array $inlineKeyboardButtons)
    {
        $this->inlineKeyboardButtons = $inlineKeyboardButtons;
    }

    /**
     * @return array
     */
    public function getInlineKeyboardButtons(): array
    {
        return $this->inlineKeyboardButtons;
    }
}
