<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\SendMediaGroup;
use SimpleTelegramBotClient\Dto\Type\InputMediaPhoto;
use SimpleTelegramBotClient\Dto\Type\InputMediaVideo;

class SendMediaGroupBuilder
{
    /**
     * @var string
     */
    private $chatId;
    /**
     * @var InputMediaPhoto[]|InputMediaVideo[]
     */
    private $media = [];
    /**
     * @var bool|null
     */
    private $disableNotification;
    /**
     * @var int|null
     */
    private $replyToMessageId;

    /**
     * SendMediaGroupBuilder constructor.
     * @param string $chatId
     */
    public function __construct(string $chatId)
    {
        $this->chatId = $chatId;
    }

    public function build(): SendMediaGroup
    {
        return new SendMediaGroup(
            $this->chatId,
            $this->media,
            $this->disableNotification,
            $this->replyToMessageId
        );
    }

    /**
     * @param InputMediaPhoto|InputMediaVideo $media
     * @return SendMediaGroupBuilder
     */
    public function addMedia($media): SendMediaGroupBuilder
    {
        $this->media[] = $media;
        return $this;
    }

    /**
     * @param bool|null $disableNotification
     * @return SendMediaGroupBuilder
     */
    public function setDisableNotification(?bool $disableNotification): SendMediaGroupBuilder
    {
        $this->disableNotification = $disableNotification;
        return $this;
    }

    /**
     * @param int|null $replyToMessageId
     * @return SendMediaGroupBuilder
     */
    public function setReplyToMessageId(?int $replyToMessageId): SendMediaGroupBuilder
    {
        $this->replyToMessageId = $replyToMessageId;
        return $this;
    }
}
