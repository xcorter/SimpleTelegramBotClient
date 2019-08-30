<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class AnswerCallbackQuery
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#answercallbackquery
 */
class AnswerCallbackQuery implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $callbackQueryId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $text;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $showAlert;
    /**
     * @var string|null
     * @Type("string")
     */
    private $url;
    /**
     * @var int|null
     * @Type("int")
     */
    private $cacheTime;

    /**
     * AnswerCallbackQuery constructor.
     * @param string $callbackQueryId
     * @param string|null $text
     * @param bool|null $showAlert
     * @param string|null $url
     * @param int|null $cacheTime
     */
    public function __construct(string $callbackQueryId, ?string $text, ?bool $showAlert, ?string $url, ?int $cacheTime)
    {
        $this->callbackQueryId = $callbackQueryId;
        $this->text = $text;
        $this->showAlert = $showAlert;
        $this->url = $url;
        $this->cacheTime = $cacheTime;
    }

    /**
     * @return string
     */
    public function getCallbackQueryId(): string
    {
        return $this->callbackQueryId;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @return bool|null
     */
    public function getShowAlert(): ?bool
    {
        return $this->showAlert;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return int|null
     */
    public function getCacheTime(): ?int
    {
        return $this->cacheTime;
    }
}
