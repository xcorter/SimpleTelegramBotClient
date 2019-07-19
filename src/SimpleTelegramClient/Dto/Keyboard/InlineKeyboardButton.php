<?php

namespace SimpleTelegramClient\Dto\Keyboard;

use JMS\Serializer\Annotation\Type;
use SimpleTelegramClient\Dto\CallbackGame;
use SimpleTelegramClient\Dto\LoginUrl;

/**
 * Class InlineKeyboardButton
 * @package SimpleTelegramClient\Dto
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 */
class InlineKeyboardButton
{
    /**
     * @var string
     * @Type("string")
     */
    private $text;
    /**
     * @var string|null
     * @Type("string")
     */
    private $url;
    /**
     * @var LoginUrl|null
     * @Type("SimpleTelegramClient\Dto\LoginUrl")
     */
    private $loginUrl;
    /**
     * @var string|null
     * @Type("string")
     */
    private $callbackData;
    /**
     * @var string|null
     * @Type("string")
     */
    private $switchInlineQuery;
    /**
     * @var string|null
     * @Type("string")
     */
    private $switchInlineQueryCurrentChat;
    /**
     * @var CallbackGame|null
     * @Type("SimpleTelegramClient\Dto\CallbackGame")
     */
    private $callbackGame;
    /**
     * @var bool|null
     * @Type("bool")
     */
    private $pay;

    /**
     * InlineKeyboardButton constructor.
     * @param string $text
     * @param string|null $url
     * @param LoginUrl|null $loginUrl
     * @param string|null $callbackData
     * @param string|null $switchInlineQuery
     * @param string|null $switchInlineQueryCurrentChat
     * @param CallbackGame|null $callbackGame
     * @param bool|null $pay
     */
    public function __construct(
        string $text,
        ?string $url,
        ?LoginUrl $loginUrl,
        ?string $callbackData,
        ?string $switchInlineQuery,
        ?string $switchInlineQueryCurrentChat,
        ?CallbackGame $callbackGame,
        ?bool $pay
    ) {
        $this->text = $text;
        $this->url = $url;
        $this->loginUrl = $loginUrl;
        $this->callbackData = $callbackData;
        $this->switchInlineQuery = $switchInlineQuery;
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
        $this->callbackGame = $callbackGame;
        $this->pay = $pay;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return LoginUrl|null
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return $this->loginUrl;
    }

    /**
     * @return string|null
     */
    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @return CallbackGame|null
     */
    public function getCallbackGame(): ?CallbackGame
    {
        return $this->callbackGame;
    }

    /**
     * @return bool|null
     */
    public function getPay(): ?bool
    {
        return $this->pay;
    }
}
