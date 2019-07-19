<?php

namespace SimpleTelegramClient\Builder\Keyboard;

use SimpleTelegramClient\Dto\Keyboard\InlineKeyboardMarkup;

class InlineKeyboardMarkupBuilder
{
    private $arrayOfArrayInlineKeyboardButton = [];

    public function addInlineKeyboardButtonArray(ArrayKeyboardButtonBuilder $arrayKeyboardButtonBuilder): self
    {
        $this->arrayOfArrayInlineKeyboardButton[] = $arrayKeyboardButtonBuilder->build();
        return $this;
    }


    public function build(): InlineKeyboardMarkup
    {
        return new InlineKeyboardMarkup(
            $this->arrayOfArrayInlineKeyboardButton
        );
    }
}
