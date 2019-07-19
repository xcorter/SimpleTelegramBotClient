<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Keyboard\ArrayKeyboardButton;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;

class ReplyKeyboardMarkupBuilder
{
    /**
     * @var ArrayKeyboardButton[]
     */
    private $keyboard = [];
    /**
     * @var bool|null
     */
    private $resizeKeyboard;
    /**
     * @var bool|null
     */
    private $oneTimeKeyboard;
    /**
     * @var bool|null
     */
    private $selective;

    /**
     * @param ArrayKeyboardButton $arrayKeyboardButton
     * @return $this
     */
    public function addArrayOfKeyboardButton(array $arrayKeyboardButton): ReplyKeyboardMarkupBuilder
    {
        $this->keyboard[] = $arrayKeyboardButton;
        return $this;
    }

    /**
     * @param bool|null $resizeKeyboard
     */
    public function setResizeKeyboard(?bool $resizeKeyboard): void
    {
        $this->resizeKeyboard = $resizeKeyboard;
    }

    /**
     * @param bool|null $oneTimeKeyboard
     */
    public function setOneTimeKeyboard(?bool $oneTimeKeyboard): void
    {
        $this->oneTimeKeyboard = $oneTimeKeyboard;
    }

    /**
     * @param bool|null $selective
     */
    public function setSelective(?bool $selective): void
    {
        $this->selective = $selective;
    }

    public function build(): ReplyKeyboardMarkup
    {
        return new ReplyKeyboardMarkup(
            $this->keyboard,
            $this->resizeKeyboard,
            $this->oneTimeKeyboard,
            $this->selective
        );
    }
}
