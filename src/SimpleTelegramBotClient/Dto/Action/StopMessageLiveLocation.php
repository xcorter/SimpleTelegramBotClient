<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Type;
use SimpleTelegramBotClient\Dto\Keyboard\InlineKeyboardMarkup;

/**
 * Class StopMessageLiveLocation
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#stopmessagelivelocation
 */
class StopMessageLiveLocation implements ActionInterface
{
    /**
     * @var string|null
     * @Type("string")
     */
    private $chatId;
    /**
     * @var int|null
     * @Type("integer")
     */
    private $messageId;
    /**
     * @var string|null
     * @Type("string")
     */
    private $inlineMessageId;
    /**
     * @var InlineKeyboardMarkup|null
     * @Exclude()
     */
    private $replyMarkup;

    /**
     * StopMessageLiveLocation constructor.
     * @param string|null $chatId
     * @param int|null $messageId
     * @param string|null $inlineMessageId
     * @param InlineKeyboardMarkup|null $replyMarkup
     */
    public function __construct(
        ?string $chatId,
        ?int $messageId,
        ?string $inlineMessageId,
        ?InlineKeyboardMarkup $replyMarkup
    ) {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup = $replyMarkup;
    }

    /**
     * @return string|null
     */
    public function getChatId(): ?string
    {
        return $this->chatId;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }
}
