<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendContact;
use SimpleTelegramBotClient\Dto\Type\ForceReply;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardMarkup;
use SimpleTelegramBotClient\Dto\Keyboard\ReplyKeyboardRemove;

class SendContactBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var string
     */
    private $phoneNumber;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string|null
     */
    private $lastName;
    /**
     * @var string|null
     */
    private $vcard;
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
     * SendContactBuilder constructor.
     * @param string $chatId
     * @param string $phoneNumber
     * @param string $firstName
     */
    public function __construct(string $chatId, string $phoneNumber, string $firstName)
    {
        $this->chatId = $chatId;
        $this->phoneNumber = $phoneNumber;
        $this->firstName = $firstName;
    }

    public function build(): SendContact
    {
        return new SendContact(
            $this->chatId,
            $this->phoneNumber,
            $this->firstName,
            $this->lastName,
            $this->vcard,
            $this->disableNotification,
            $this->replyToMessageId,
            $this->replyMarkup
        );
    }

    /**
     * @param string|null $lastName
     * @return SendContactBuilder
     */
    public function setLastName(?string $lastName): SendContactBuilder
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string|null $vcard
     * @return SendContactBuilder
     */
    public function setVcard(?string $vcard): SendContactBuilder
    {
        $this->vcard = $vcard;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendContactBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendContactBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendContactBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendContactBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }

    /**
     * @param ForceReply|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|null $replyMarkup
     * @return SendContactBuilder
     */
    public function setReplyMarkup($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }
}
