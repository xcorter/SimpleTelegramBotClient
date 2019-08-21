<?php

use SimpleTelegramBotClient\Builder\Action\KickChatMemberBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';
$userId = 234;

$kickChatMemberBuilder = new KickChatMemberBuilder($chatId, $userId);

$message = $kickChatMemberBuilder->build();
$sendMessageResponse = $telegramService->kickChatMember($message);

var_dump($sendMessageResponse);
