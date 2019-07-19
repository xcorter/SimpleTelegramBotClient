<?php

namespace SimpleTelegramClient\Builder\Keyboard;

use SimpleTelegramClient\Dto\Keyboard\ReplyKeyboardRemove;

class ReplyKeyboardRemoveBuilder
{
    /**
     * @var bool|null
     */
    private $selective;

    /**
     * @param bool|null $selective
     * @return ReplyKeyboardRemoveBuilder
     */
    public function setSelective(?bool $selective): ReplyKeyboardRemoveBuilder
    {
        $this->selective = $selective;
        return $this;
    }

    public function build(): ReplyKeyboardRemove
    {
        return new ReplyKeyboardRemove(true, false);
    }
}
