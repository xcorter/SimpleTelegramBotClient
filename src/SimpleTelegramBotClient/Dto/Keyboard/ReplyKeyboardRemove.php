<?php

namespace SimpleTelegramBotClient\Dto\Keyboard;

class ReplyKeyboardRemove
{
    /**
     * @var bool
     */
    private $removeKeyboard;
    /**
     * @var bool|null
     */
    private $selective;

    /**
     * ReplyKeyboardRemove constructor.
     * @param bool $removeKeyboard
     * @param bool|null $selective
     */
    public function __construct(bool $removeKeyboard, ?bool $selective)
    {
        $this->removeKeyboard = $removeKeyboard;
        $this->selective = $selective;
    }

    /**
     * @return bool
     */
    public function isRemoveKeyboard(): bool
    {
        return $this->removeKeyboard;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
