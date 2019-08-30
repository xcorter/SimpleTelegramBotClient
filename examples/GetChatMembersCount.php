<?php

use SimpleTelegramBotClient\Dto\Action\GetChatMembersCount;

include './init.php';

$chatId = '@twochannel';

$message = new GetChatMembersCount($chatId);
$response = $telegramService->getChatMembersCount($message);

var_dump($response);
