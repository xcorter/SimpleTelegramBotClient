<?php

use SimpleTelegramBotClient\Dto\Action\GetChat;

include './init.php';

$chatId = '@twochannel';

$message = new GetChat($chatId);
$response = $telegramService->getChat($message);

var_dump($response);
