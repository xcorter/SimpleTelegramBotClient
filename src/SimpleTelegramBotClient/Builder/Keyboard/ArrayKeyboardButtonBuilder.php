<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardButton;
use SimpleTelegramBotClient\Dto\Keyboard\KeyboardButton;

class ArrayKeyboardButtonBuilder
{
    /**
     * @var InlineKeyboardButton[]|KeyboardButton[] $buttons
     */
    private $buttons = [];

    /**
     * @param InlineKeyboardButton|KeyboardButton $inlineKeyboardButton
     * @return ArrayKeyboardButtonBuilder
     */
    public function add($inlineKeyboardButton): ArrayKeyboardButtonBuilder
    {
        $this->buttons[] = $inlineKeyboardButton;
        return $this;
    }

    /**
     * @return InlineKeyboardButton[]|KeyboardButton[]
     */
    public function build(): array
    {
        return $this->buttons;
    }
}
