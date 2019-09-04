<?php

namespace SimpleTelegramBotClient\Dto\Action\Webhook;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Action\ActionInterface;

/**
 * Class SetWebhook
 * @package SimpleTelegramBotClient\Dto\Action\Webhook
 *
 * @link https://core.telegram.org/bots/api#setwebhook
 */
class SetWebhook implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $url;
    /**
     * @var resource|string
     * @Exclude()
     */
    private $certificate;
    /**
     * @var int|null
     * @Type("int")
     */
    private $maxConnections;
    /**
     * @var array|null
     * @Type("array<string>")
     */
    private $allowedUpdates;

    /**
     * SetWebhook constructor.
     * @param string $url
     * @param string $certificate
     * @param int|null $maxConnections
     * @param array|null $allowedUpdates
     */
    public function __construct(string $url, string $certificate, ?int $maxConnections, ?array $allowedUpdates)
    {
        $this->url = $url;
        $this->certificate = $certificate;
        $this->maxConnections = $maxConnections;
        $this->allowedUpdates = $allowedUpdates;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getCertificate(): string
    {
        return $this->certificate;
    }

    /**
     * @return int|null
     */
    public function getMaxConnections(): ?int
    {
        return $this->maxConnections;
    }

    /**
     * @return array|null
     */
    public function getAllowedUpdates(): ?array
    {
        return $this->allowedUpdates;
    }
}
