<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardButton;

class ArrayKeyboardButtonBuilder
{
    /**
     * @var InlineKeyboardButton[] $buttons
     */
    private $buttons = [];

    public function add(InlineKeyboardButton $inlineKeyboardButton): ArrayKeyboardButtonBuilder
    {
        $this->buttons[] = $inlineKeyboardButton;
        return $this;
    }

    public function createInlineKeyboardButtonBuilder(string $text): InlineKeyboardButtonBuilder
    {
        return new InlineKeyboardButtonBuilder($text);
    }

    /**
     * @return InlineKeyboardButton[]
     */
    public function build(): array
    {
        return $this->buttons;
    }
}
