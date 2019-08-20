<?php

use SimpleTelegramBotClient\Builder\Action\SendChatActionBuilder;
use SimpleTelegramBotClient\Constant\ChatAction;

include './init.php';

$chatId = '165068132';

$sendChatActionBuilder = new SendChatActionBuilder($chatId, ChatAction::TYPING);

$message = $sendChatActionBuilder->build();
$sendChatActionResponse = $telegramService->sendChatAction($message);

var_dump($sendChatActionResponse);
