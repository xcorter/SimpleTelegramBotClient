<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

/**
 * Class SetChatStickerSet
 * @package SimpleTelegramBotClient\Dto\Action
 *
 * @link https://core.telegram.org/bots/api#setchatstickerset
 */
class SetChatStickerSet implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $chatId;
    /**
     * @var string
     * @Type("string")
     */
    private $stickerSetName;

    /**
     * SetChatStickerSet constructor.
     * @param string $chatId
     * @param string $stickerSetName
     */
    public function __construct(string $chatId, string $stickerSetName)
    {
        $this->chatId = $chatId;
        $this->stickerSetName = $stickerSetName;
    }

    /**
     * @return string
     */
    public function getChatId(): string
    {
        return $this->chatId;
    }

    /**
     * @return string
     */
    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }
}
