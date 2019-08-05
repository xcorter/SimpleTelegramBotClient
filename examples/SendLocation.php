<?php

use SimpleTelegramBotClient\Builder\Action\SendLocationBuilder;

include './init.php';

$chatId = '165068132';

$sendLocationBuilder = new SendLocationBuilder($chatId, 1.12, 2.2334);

$message = $sendLocationBuilder->build();
$sendMLocationResponse = $telegramService->sendLocation($message);

var_dump($sendMLocationResponse);
