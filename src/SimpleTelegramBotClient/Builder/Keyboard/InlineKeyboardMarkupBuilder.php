<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

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
