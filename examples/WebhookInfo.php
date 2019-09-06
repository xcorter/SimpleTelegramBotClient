<?php

use SimpleTelegramBotClient\Dto\Action\Webhook\GetWebhookInfo;

include './init.php';

$message = new GetWebhookInfo();

$response = $telegramService->getWebhookInfo($message);
var_dump($response);
