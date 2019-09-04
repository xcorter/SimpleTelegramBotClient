<?php

namespace SimpleTelegramBotClient\Builder\Action\Webhook;

use SimpleTelegramBotClient\Dto\Action\Webhook\SetWebhook;

class SetWebhookBuilder
{
    public const TYPE_MESSAGE = 'message';
    public const TYPE_EDITED_MESSAGE = 'edited_message';
    public const TYPE_CHANNEL_POST = 'channel_post';
    public const TYPE_EDITED_CHANNEL_POST = 'edited_channel_post';

    private const TYPES  = [
        self::TYPE_MESSAGE,
        self::TYPE_EDITED_MESSAGE,
        self::TYPE_CHANNEL_POST,
        self::TYPE_EDITED_CHANNEL_POST,
    ];

    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $certificate;
    /**
     * @var int|null
     */
    private $maxConnections;
    /**
     * @var array|null
     */
    private $allowedUpdates;

    /**
     * SetWebhookBuilder constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return SetWebhook
     */
    public function build(): SetWebhook
    {
        return new SetWebhook(
            $this->url,
            $this->certificate,
            $this->maxConnections,
            $this->allowedUpdates
        );
    }

    /**
     * @param string $certificate
     * @return SetWebhookBuilder
     */
    public function setCertificate(string $certificate): SetWebhookBuilder
    {
        $this->certificate = $certificate;
        return $this;
    }

    /**
     * @param int|null $maxConnections
     * @return SetWebhookBuilder
     */
    public function setMaxConnections(?int $maxConnections): SetWebhookBuilder
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }

    public function addAllowedUpdate(string $type): SetWebhookBuilder
    {
        if (!in_array($type, self::TYPES, true)) {
            throw new \UnexpectedValueException('Wrong type');
        }
        if ($this->allowedUpdates === null) {
            $this->allowedUpdates = [];
        }
        $this->allowedUpdates[] = $type;
        return $this;
    }
}
