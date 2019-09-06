<?php

namespace SimpleTelegramBotClient\Dto\Type;

use JMS\Serializer\Annotation\Type;

/**
 * Class WebhookInfo
 * @package SimpleTelegramBotClient\Dto\Type
 *
 * @link https://core.telegram.org/bots/api#webhookinfo
 */
class WebhookInfo
{
    /**
     * @var string
     * @Type("string")
     */
    private $url;
    /**
     * @var bool
     * @Type("bool")
     */
    private $hasCustomCertificate;
    /**
     * @var integer
     * @Type("integer")
     */
    private $pendingUpdateCount;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $lastErrorDate;
    /**
     * @var string|null
     * @Type("string")
     */
    private $lastErrorMessage;
    /**
     * @var integer|null
     * @Type("integer")
     */
    private $maxConnections;
    /**
     * @var string[]|null
     * @Type("array<string>")
     */
    private $allowedUpdates;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function isHasCustomCertificate(): bool
    {
        return $this->hasCustomCertificate;
    }

    /**
     * @return int
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    /**
     * @return int|null
     */
    public function getLastErrorDate(): ?int
    {
        return $this->lastErrorDate;
    }

    /**
     * @return string|null
     */
    public function getLastErrorMessage(): ?string
    {
        return $this->lastErrorMessage;
    }

    /**
     * @return int|null
     */
    public function getMaxConnections(): ?int
    {
        return $this->maxConnections;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedUpdates(): ?array
    {
        return $this->allowedUpdates;
    }
}
