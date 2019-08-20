<?php

use SimpleTelegramBotClient\Builder\Action\SendContactBuilder;

include './init.php';

$chatId = '165068132';

$sendContactBuilder = new SendContactBuilder($chatId, '123123123', 'TestName');

$message = $sendContactBuilder->build();
$sendContactResponse = $telegramService->sendContact($message);

var_dump($sendContactResponse);
