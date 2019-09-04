<?php

namespace SimpleTelegramBotClient;

use SimpleTelegramBotClient\Dto\Action\ActionInterface;
use SimpleTelegramBotClient\Dto\Action\AnswerCallbackQuery;
use SimpleTelegramBotClient\Dto\Action\DeleteChatPhoto;
use SimpleTelegramBotClient\Dto\Action\DeleteChatStickerSet;
use SimpleTelegramBotClient\Dto\Action\ExportChatInviteLink;
use SimpleTelegramBotClient\Dto\Action\GetChat;
use SimpleTelegramBotClient\Dto\Action\GetChatAdministrators;
use SimpleTelegramBotClient\Dto\Action\GetChatMembersCount;
use SimpleTelegramBotClient\Dto\Action\GetFile;
use SimpleTelegramBotClient\Dto\Action\GetUserProfilePhotos;
use SimpleTelegramBotClient\Dto\Action\KickChatMember;
use SimpleTelegramBotClient\Dto\Action\LeaveChat;
use SimpleTelegramBotClient\Dto\Action\PinChatMessage;
use SimpleTelegramBotClient\Dto\Action\PromoteChatMember;
use SimpleTelegramBotClient\Dto\Action\RestrictChatMember;
use SimpleTelegramBotClient\Dto\Action\SendChatAction;
use SimpleTelegramBotClient\Dto\Action\SetChatDescription;
use SimpleTelegramBotClient\Dto\Action\SetChatPermissions;
use SimpleTelegramBotClient\Dto\Action\SetChatPhoto;
use SimpleTelegramBotClient\Dto\Action\SetChatStickerSet;
use SimpleTelegramBotClient\Dto\Action\SetChatTitle;
use SimpleTelegramBotClient\Dto\Action\UnbanChatMember;
use SimpleTelegramBotClient\Dto\Action\UnpinChatMessage;
use SimpleTelegramBotClient\Dto\Action\Webhook\DeleteWebhook;
use SimpleTelegramBotClient\Dto\Action\Webhook\SetWebhook;
use SimpleTelegramBotClient\Dto\Response\ChatInviteLinkResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatAdministratorsResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatResponse;
use SimpleTelegramBotClient\Dto\Response\GetFileResponse;
use SimpleTelegramBotClient\Dto\Response\GetUserProfilePhotosResponse;
use SimpleTelegramBotClient\Dto\Response\IntResultResponse;
use SimpleTelegramBotClient\Dto\Response\SendMessageResponse;
use SimpleTelegramBotClient\Dto\Response\SimpleResponse;

class ResponseFactory
{

    public function getResponseClass(ActionInterface $action): string
    {
        if (
            $action instanceof SendChatAction
            || $action instanceof KickChatMember
            || $action instanceof UnbanChatMember
            || $action instanceof RestrictChatMember
            || $action instanceof PromoteChatMember
            || $action instanceof SetChatPermissions
            || $action instanceof SetChatPhoto
            || $action instanceof DeleteChatPhoto
            || $action instanceof SetChatTitle
            || $action instanceof PinChatMessage
            || $action instanceof SetChatDescription
            || $action instanceof UnpinChatMessage
            || $action instanceof LeaveChat
            || $action instanceof SetChatStickerSet
            || $action instanceof DeleteChatStickerSet
            || $action instanceof AnswerCallbackQuery
            || $action instanceof SetWebhook
            || $action instanceof DeleteWebhook
        ) {
            return SimpleResponse::class;
        }

        if ($action instanceof GetUserProfilePhotos) {
            return GetUserProfilePhotosResponse::class;
        }

        if ($action instanceof GetChat) {
            return GetChatResponse::class;
        }

        if ($action instanceof GetFile) {
            return GetFileResponse::class;
        }

        if ($action instanceof GetChatAdministrators) {
            return GetChatAdministratorsResponse::class;
        }

        if ($action instanceof GetChatMembersCount) {
            return IntResultResponse::class;
        }

        if ($action instanceof ExportChatInviteLink) {
            return ChatInviteLinkResponse::class;
        }
        return SendMessageResponse::class;
    }
}
