<?php

namespace SimpleTelegramClient\Builder\Keyboard;

use SimpleTelegramClient\Dto\CallbackGame;
use SimpleTelegramClient\Dto\Keyboard\InlineKeyboardButton;
use SimpleTelegramClient\Dto\LoginUrl;

/**
 * Class InlineKeyboardButtonBuilder
 * @package SimpleTelegramClient\Builder
 * @see InlineKeyboardButton
 */
class InlineKeyboardButtonBuilder
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var string|null
     */
    private $url;
    /**
     * @var LoginUrl|null
     */
    private $loginUrl;
    /**
     * @var string|null
     */
    private $callbackData;
    /**
     * @var string|null
     */
    private $switchInlineQuery;
    /**
     * @var string|null
     */
    private $switchInlineQueryCurrentChat;
    /**
     * @var CallbackGame|null
     */
    private $callbackGame;
    /**
     * @var bool|null
     */
    private $pay;

    /**
     * InlineKeyboardButtonBuilder constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param LoginUrl|null $loginUrl
     */
    public function setLoginUrl(?LoginUrl $loginUrl): void
    {
        $this->loginUrl = $loginUrl;
    }

    /**
     * @param string|null $callbackData
     */
    public function setCallbackData(?string $callbackData): void
    {
        $this->callbackData = $callbackData;
    }

    /**
     * @param string|null $switchInlineQuery
     */
    public function setSwitchInlineQuery(?string $switchInlineQuery): void
    {
        $this->switchInlineQuery = $switchInlineQuery;
    }

    /**
     * @param string|null $switchInlineQueryCurrentChat
     */
    public function setSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): void
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
    }

    /**
     * @param CallbackGame|null $callbackGame
     */
    public function setCallbackGame(?CallbackGame $callbackGame): void
    {
        $this->callbackGame = $callbackGame;
    }

    /**
     * @param bool|null $pay
     */
    public function setPay(?bool $pay): void
    {
        $this->pay = $pay;
    }

    public function build(): InlineKeyboardButton
    {
        return new InlineKeyboardButton(
            $this->text,
            $this->url,
            $this->loginUrl,
            $this->callbackData,
            $this->switchInlineQuery,
            $this->switchInlineQueryCurrentChat,
            $this->callbackGame,
            $this->pay
        );
    }
}
