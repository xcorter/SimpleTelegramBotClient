<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\AnswerCallbackQuery;

class AnswerCallbackQueryBuilder
{
    /**
     * @var string
     */
    private $callbackQueryId;
    /**
     * @var string|null
     */
    private $text;
    /**
     * @var bool|null
     */
    private $showAlert;
    /**
     * @var string|null
     */
    private $url;
    /**
     * @var int|null
     */
    private $cacheTime;

    /**
     * AnswerCallbackQueryBuilder constructor.
     * @param string $callbackQueryId
     */
    public function __construct(string $callbackQueryId)
    {
        $this->callbackQueryId = $callbackQueryId;
    }

    public function build(): AnswerCallbackQuery
    {
        return new AnswerCallbackQuery(
            $this->callbackQueryId,
            $this->text,
            $this->showAlert,
            $this->url,
            $this->cacheTime
        );
    }

    /**
     * @param string|null $text
     * @return AnswerCallbackQueryBuilder
     */
    public function setText(?string $text): AnswerCallbackQueryBuilder
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param bool|null $showAlert
     * @return AnswerCallbackQueryBuilder
     */
    public function setShowAlert(?bool $showAlert): AnswerCallbackQueryBuilder
    {
        $this->showAlert = $showAlert;
        return $this;
    }

    /**
     * @param string|null $url
     * @return AnswerCallbackQueryBuilder
     */
    public function setUrl(?string $url): AnswerCallbackQueryBuilder
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param int|null $cacheTime
     * @return AnswerCallbackQueryBuilder
     */
    public function setCacheTime(?int $cacheTime): AnswerCallbackQueryBuilder
    {
        $this->cacheTime = $cacheTime;
        return $this;
    }
}
