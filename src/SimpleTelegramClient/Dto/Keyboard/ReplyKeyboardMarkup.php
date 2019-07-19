<?php

namespace SimpleTelegramClient\Dto\Keyboard;

class ReplyKeyboardMarkup
{
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
     * ReplyKeyboardMarkup constructor.
     * @param array $keyboard
     * @param bool|null $resizeKeyboard
     * @param bool|null $oneTimeKeyboard
     * @param bool|null $selective
     */
    public function __construct(array $keyboard, ?bool $resizeKeyboard, ?bool $oneTimeKeyboard, ?bool $selective)
    {
        $this->keyboard = $keyboard;
        $this->resizeKeyboard = $resizeKeyboard;
        $this->oneTimeKeyboard = $oneTimeKeyboard;
        $this->selective = $selective;
    }

    /**
     * @return array
     */
    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    /**
     * @return bool|null
     */
    public function getResizeKeyboard(): ?bool
    {
        return $this->resizeKeyboard;
    }

    /**
     * @return bool|null
     */
    public function getOneTimeKeyboard(): ?bool
    {
        return $this->oneTimeKeyboard;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
