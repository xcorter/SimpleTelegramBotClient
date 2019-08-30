<?php

use SimpleTelegramBotClient\Dto\Action\GetChatAdministrators;

include './init.php';

$chatId = '@twochannel';

$message = new GetChatAdministrators($chatId);
$response = $telegramService->getChatAdministrators($message);

var_dump($response);
