<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\InputMediaPhoto;
use SimpleTelegramBotClient\Dto\InputMediaVideo;

/**
 * Class SendMediaGroup
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#sendmediagroup
 */
class SendMediaGroup implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var InputMediaPhoto[]|InputMediaVideo[]
     * @Exclude()
     */
    private $media;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $disableNotification;
    /**
     * @var integer|null
     * @Type("int")
     */
    private $replyToMessageId;

    /**
     * SendMediaGroup constructor.
     * @param string $chatId
     * @param InputMediaPhoto[]|InputMediaVideo[] $media
     * @param bool|null $disableNotification
     * @param int|null $replyToMessageId
     */
    public function __construct(string $chatId, $media, ?bool $disableNotification, ?int $replyToMessageId)
    {
        $this->chatId = $chatId;
        $this->media = $media;
        $this->disableNotification = $disableNotification;
        $this->replyToMessageId = $replyToMessageId;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return InputMediaPhoto[]|InputMediaVideo[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @return bool|null
     */
    public function getDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    /**
     * @return int|null
     */
    public function getReplyToMessageId(): ?int
    {
        return $this->replyToMessageId;
    }
}
