<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendPoll;
use SimpleTelegramBotClient\Dto\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendPollBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $question;
    /**
     * @var string[]
     */
    private $options = [];
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
     * SendPollBuilder constructor.
     * @param string $chatId
     * @param string $question
     */
    public function __construct(string $chatId, string $question)
    {
        $this->chatId = $chatId;
        $this->question = $question;
    }

    public function build(): SendPoll
    {
        if (!$this->options) {
            throw new \DomainException('At least one option must be set');
        }
        return new SendPoll(
            $this->chatId,
            $this->question,
            $this->options,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    public function addOption(string $option): SendPollBuilder
    {
        $this->options[] = $option;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendPollBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendPollBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendPollBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendPollBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendPollBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
