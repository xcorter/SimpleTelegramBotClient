<?php

use SimpleTelegramBotClient\Builder\Action\UnbanChatMemberBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';
$userId = 234;

$unbanChatMemberBuilder = new UnbanChatMemberBuilder($chatId, $userId);

$message = $unbanChatMemberBuilder->build();
$response = $telegramService->unbanChatMember($message);

var_dump($response);
