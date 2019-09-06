<?php

namespace SimpleTelegramBotClient;

use SimpleTelegramBotClient\Dto\Response\ChatInviteLinkResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatAdministratorsResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatResponse;
use SimpleTelegramBotClient\Dto\Response\GetFileResponse;
use SimpleTelegramBotClient\Dto\Response\GetMeResponse;
use SimpleTelegramBotClient\Dto\Response\GetUserProfilePhotosResponse;
use SimpleTelegramBotClient\Dto\Response\GetWebhookInfoResponse;
use SimpleTelegramBotClient\Dto\Response\IntResultResponse;
use SimpleTelegramBotClient\Dto\Response\Response;
use SimpleTelegramBotClient\Dto\Response\SendMessageResponse;
use SimpleTelegramBotClient\Dto\Response\SimpleResponse;

class ResponseFactory
{
    private const SIMPLE_RESPONSE = [
        'sendChatAction',
        'kickChatMember',
        'unbanChatMember',
        'restrictChatMember',
        'promoteChatMember',
        'setChatPermissions',
        'setChatPhoto',
        'deleteChatPhoto',
        'setChatTitle',
        'pinChatMessage',
        'setChatDescription',
        'unpinChatMessage',
        'leaveChat',
        'setChatStickerSet',
        'deleteChatStickerSet',
        'answerCallbackQuery',
        'setWebhook',
        'deleteWebhook',
    ];

    public function getResponseClass(string $action): string
    {
        if (in_array($action, self::SIMPLE_RESPONSE, true)) {
            return SimpleResponse::class;
        }

        if ($action === 'getUserProfilePhotos') {
            return GetUserProfilePhotosResponse::class;
        }

        if ($action === 'getChat') {
            return GetChatResponse::class;
        }

        if ($action === 'getFile') {
            return GetFileResponse::class;
        }

        if ($action === 'getChatAdministrators') {
            return GetChatAdministratorsResponse::class;
        }

        if ($action === 'getChatMembersCount') {
            return IntResultResponse::class;
        }

        if ($action === 'exportChatInviteLink') {
            return ChatInviteLinkResponse::class;
        }

        if ($action === 'getWebhookInfo') {
            return GetWebhookInfoResponse::class;
        }

        if ($action === 'getMe') {
            return GetMeResponse::class;
        }

        if ($action === 'getUpdates') {
            return Response::class;
        }

        return SendMessageResponse::class;
    }
}
