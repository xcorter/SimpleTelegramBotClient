<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

class InlineKeyboardMarkupBuilder
{
    private $arrayOfArrayInlineKeyboardButton = [];

    public function addInlineKeyboardButtonArray(array $arrayKeyboardButton): self
    {
        $this->arrayOfArrayInlineKeyboardButton[] = $arrayKeyboardButton;
        return $this;
    }


    public function build(): InlineKeyboardMarkup
    {
        return new InlineKeyboardMarkup(
            $this->arrayOfArrayInlineKeyboardButton
        );
    }
}
