<?php

namespace SimpleTelegramBotClient\Dto;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

/**
 * Class Message
 * @package SimpleTelegramBotClient\Dto
 * @link https://core.telegram.org/bots/api#message
 */
class Message
{
    /**
     * @var int
     * @Type("int")
     */
    private $messageId;
    /**
     * @var User|null
     * @Type("SimpleTelegramBotClient\Dto\User")
     */
    private $from;
    /**
     * @var \DateTimeImmutable
     * @Type("DateTimeImmutable<'U'>")
     */
    private $date;
    /**
     * @var Chat
     * @Type("SimpleTelegramBotClient\Dto\Chat")
     */
    private $chat;
    /**
     * @var User|null
     * @Type("SimpleTelegramBotClient\Dto\User")
     */
    private $forwardFrom;
    /**
     * @var Chat|null
     * @Type("SimpleTelegramBotClient\Dto\Chat")
     */
    private $forwardFromChat;
    /**
     * @var int|null
     * @Type("int")
     */
    private $forwardFromMessageId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $forwardSignature;
    /**
     * @var string|null
     * @Type("string")
     */
    private $forwardSenderName;
    /**
     * @var \DateTimeImmutable|null
     * @Type("DateTimeImmutable<'U'>")
     */
    private $forwardDate;
    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $replyToMessage;
    /**
     * @var \DateTimeImmutable|null
     * @Type("DateTimeImmutable<'U'>")
     */
    private $editDate;
    /**
     * @var string|null
     * @Type("string")
     */
    private $mediaGroupId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $authorSignature;
    /**
     * @var string|null
     * @Type("string")
     */
    private $text;
    /**
     * @var MessageEntity[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\MessageEntity>")
     */
    private $entities;
    /**
     * @var MessageEntity[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\MessageEntity>")
     */
    private $captionEntities;
    /**
     * @var Audio|null
     * @Type("SimpleTelegramBotClient\Dto\Audio")
     */
    private $audio;
    /**
     * @var Document|null
     * @Type("SimpleTelegramBotClient\Dto\Document")
     */
    private $document;
    /**
     * @var Animation|null
     * @Type("SimpleTelegramBotClient\Dto\Animation")
     */
    private $animation;
    /**
     * @var Game|null
     * @Type("SimpleTelegramBotClient\Dto\Game")
     */
    private $game;
    /**
     * @var PhotoSize[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\PhotoSize>")
     */
    private $photo;
    /**
     * @var Sticker|null
     * @Type("SimpleTelegramBotClient\Dto\Sticker")
     */
    private $sticker;
    /**
     * @var Video|null
     * @Type("SimpleTelegramBotClient\Dto\Video")
     */
    private $video;
    /**
     * @var Voice|null
     * @Type("SimpleTelegramBotClient\Dto\Voice")
     */
    private $voice;
    /**
     * @var VideoNote|null
     * @Type("SimpleTelegramBotClient\Dto\VideoNote")
     */
    private $videoNote;
    /**
     * @var string|null
     * @Type("string")
     */
    private $caption;
    /**
     * @var Contact|null
     * @Type("SimpleTelegramBotClient\Dto\Contact")
     */
    private $contact;
    /**
     * @var Location|null
     * @Type("SimpleTelegramBotClient\Dto\Location")
     */
    private $location;
    /**
     * @var Venue|null
     * @Type("SimpleTelegramBotClient\Dto\Venue")
     */
    private $venue;
    /**
     * @var Poll|null
     * @Type("SimpleTelegramBotClient\Dto\Poll")
     */
    private $poll;
    /**
     * @var User[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\User>")
     */
    private $newChatMembers;
    /**
     * @var string|null
     * @Type("string")
     */
    private $newChatTitle;
    /**
     * @var PhotoSize[]|null
     * @Type("array<SimpleTelegramBotClient\Dto\PhotoSize>")
     */
    private $newChatPhoto;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $deleteChatPhoto;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $groupChatPhoto;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $supergroupChatCreated;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $channelChatCreated;
    /**
     * @var int|null
     * @Type("int")
     */
    private $migrateToChatId;
    /**
     * @var int|null
     * @Type("int")
     */
    private $migrateFromChatId;
    /**
     * @var Message|null
     * @Type("SimpleTelegramBotClient\Dto\Message")
     */
    private $pinnedMessage;
    /**
     * @var Invoice|null
     * @Type("SimpleTelegramBotClient\Dto\Invoice")
     */
    private $invoice;
    /**
     * TODO need to implement
     * @var SuccessfulPayment|null
     * @Type("SimpleTelegramBotClient\Dto\SuccessfulPayment")
     */
    private $successfulPayment;
    /**
     * @var string|null
     * @Type("string")
     */
    private $connectedWebsite;
    /**
     * TODO need to implement
     * @var PassportData|null
     * @Type("SimpleTelegramBotClient\Dto\PassportData")
     */
    private $passportData;
    /**
     * @var InlineKeyboardMarkup|null
     * @Type("SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup")
     */
    private $replyMarkup;

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return User|null
     */
    public function getForwardFrom(): ?User
    {
        return $this->forwardFrom;
    }

    /**
     * @return Chat|null
     */
    public function getForwardFromChat(): ?Chat
    {
        return $this->forwardFromChat;
    }

    /**
     * @return int|null
     */
    public function getForwardFromMessageId(): ?int
    {
        return $this->forwardFromMessageId;
    }

    /**
     * @return string|null
     */
    public function getForwardSignature(): ?string
    {
        return $this->forwardSignature;
    }

    /**
     * @return string|null
     */
    public function getForwardSenderName(): ?string
    {
        return $this->forwardSenderName;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getForwardDate(): ?\DateTimeImmutable
    {
        return $this->forwardDate;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getEditDate(): ?\DateTimeImmutable
    {
        return $this->editDate;
    }

    /**
     * @return string|null
     */
    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatPhoto(): ?bool
    {
        return $this->groupChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    /**
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
