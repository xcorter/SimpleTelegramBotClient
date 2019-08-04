<?php

namespace SimpleTelegramBotClient\Dto\Keyboard;

use JMS\Serializer\Annotation\Type;

/**
 * Class InlineKeyboardMarkup
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup
{
    /**
     * @var InlineKeyboardButton[][]
     * @Type("array<array<SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardButton>>")
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
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }
}
