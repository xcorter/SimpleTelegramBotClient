<?php
namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendDocument;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendDocumentBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string|resource
     */
    private $document;
    /**
     * @var string|resource
     */
    private $thumb;
    /**
     * @var string|null
     */
    private $caption;
    /**
     * @var string|null
     */
    private $parseMode;
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var int|null
     */
    private $replyToMessageId;
    /**
     * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
     */
    private $replyMarkup;

    /**
     * SendAudioBuilder constructor.
     * @param string $chatId
     * @param resource|string $document
     */
    public function __construct(string $chatId, $document)
    {
        $this->chatId = $chatId;
        $this->document = $document;
    }

    public function build(): SendDocument
    {
        return new SendDocument(
            $this->chatId,
            $this->document,
            $this->thumb,
            $this->caption,
            $this->parseMode,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string $chatId
     * @return SendDocumentBuilder
     */
    public function setChatId(string $chatId): SendDocumentBuilder
    {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param resource|string $document
     * @return SendDocumentBuilder
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @param resource|string $thumb
     * @return SendDocumentBuilder
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @param string|null $caption
     * @return SendDocumentBuilder
     */
    public function setCaption(?string $caption): SendDocumentBuilder
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string|null $parseMode
     * @return SendDocumentBuilder
     */
    public function setParseMode(?string $parseMode): SendDocumentBuilder
    {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendDocumentBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendDocumentBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendDocumentBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendDocumentBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendDocumentBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}