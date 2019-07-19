<?php

namespace SimpleTelegramClient\Dto\Keyboard;

/**
 * Class InlineKeyboardMarkup
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup
{

    /**
     * @var ArrayKeyboardButton[]
     */
    private $inlineKeyboard;

    /**
     * InlineKeyboardMarkup constructor.
     * @param $inlineKeyboard
     */
    public function __construct(array $inlineKeyboard)
    {
        $this->inlineKeyboard = $inlineKeyboard;
    }


    /**
     * @return ArrayKeyboardButton[]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }
}
