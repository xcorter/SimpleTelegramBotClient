<?php

namespace SimpleTelegramBotClient\Builder\Keyboard;

use SimpleTelegramBotClient\Dto\Type\CallbackGame;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardButton;
use SimpleTelegramBotClient\Dto\Type\LoginUrl;

/**
 * Class InlineKeyboardButtonBuilder
 * @package SimpleTelegramBotClient\Builder
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
     * @return InlineKeyboardButtonBuilder
     */
    public function setUrl(?string $url): InlineKeyboardButtonBuilder
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param LoginUrl|null $loginUrl
     * @return InlineKeyboardButtonBuilder
     */
    public function setLoginUrl(?LoginUrl $loginUrl): InlineKeyboardButtonBuilder
    {
        $this->loginUrl = $loginUrl;
        return $this;
    }

    /**
     * @param string|null $callbackData
     * @return InlineKeyboardButtonBuilder
     */
    public function setCallbackData(?string $callbackData): InlineKeyboardButtonBuilder
    {
        $this->callbackData = $callbackData;
        return $this;
    }

    /**
     * @param string|null $switchInlineQuery
     * @return InlineKeyboardButtonBuilder
     */
    public function setSwitchInlineQuery(?string $switchInlineQuery): InlineKeyboardButtonBuilder
    {
        $this->switchInlineQuery = $switchInlineQuery;
        return $this;
    }

    /**
     * @param string|null $switchInlineQueryCurrentChat
     * @return InlineKeyboardButtonBuilder
     */
    public function setSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): InlineKeyboardButtonBuilder
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
        return $this;
    }

    /**
     * @param CallbackGame|null $callbackGame
     * @return InlineKeyboardButtonBuilder
     */
    public function setCallbackGame(?CallbackGame $callbackGame): InlineKeyboardButtonBuilder
    {
        $this->callbackGame = $callbackGame;
        return $this;
    }

    /**
     * @param bool|null $pay
     * @return InlineKeyboardButtonBuilder
     */
    public function setPay(?bool $pay): InlineKeyboardButtonBuilder
    {
        $this->pay = $pay;
        return $this;
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
