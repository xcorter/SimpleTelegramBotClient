<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendVideoNote;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendVideoNoteBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|resource
     */
    private $videoNote;
    /**
     * @var integer|null
     */
    private $duration;
    /**
     * @var integer|null
     */
    private $length;
    /**
     * @var string|resource|null
     */
    private $thumb;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var integer|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    /**
     * SendVideoNoteBuilder constructor.
     * @param string $chatId
     * @param resource|string $videoNote
     */
    public function __construct(string $chatId, $videoNote)
    {
        $this->chatId = $chatId;
        $this->videoNote = $videoNote;
    }

    /**
     * @return SendVideoNote
     */
    public function build(): SendVideoNote
    {
        return new SendVideoNote(
            $this->chatId,
            $this->videoNote,
            $this->duration,
            $this->length,
            $this->thumb,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param int|null $duration
     * @return SendVideoNoteBuilder
     */
    public function setDuration(?int $duration): SendVideoNoteBuilder
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param int|null $length
     * @return SendVideoNoteBuilder
     */
    public function setLength(?int $length): SendVideoNoteBuilder
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @param resource|string|null $thumb
     * @return SendVideoNoteBuilder
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendVideoNoteBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendVideoNoteBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendVideoNoteBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendVideoNoteBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendVideoNoteBuilder
     */
    public function setReplyMarkup($replyMarkup): SendVideoNoteBuilder
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
