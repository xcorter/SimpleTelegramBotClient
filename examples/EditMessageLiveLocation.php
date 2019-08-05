<?php

use SimpleTelegramBotClient\Builder\Action\EditMessageLiveLocationBuilder;
use SimpleTelegramBotClient\Builder\Action\SendLocationBuilder;

include './init.php';

$chatId = '165068132';

// SEND LOCATION WITH LIVE PERIOD
$sendLocationBuilder = new SendLocationBuilder($chatId, 1.12, 2.2334);
$sendLocationBuilder->setLivePeriod(100);

$message = $sendLocationBuilder->build();
$sendMLocationResponse = $telegramService->sendLocation($message);

// EDIT LOCATION
$editMessageLiveLocationBuilder = new EditMessageLiveLocationBuilder(0, 0);
$editMessageLiveLocationBuilder->setMessageId($sendMLocationResponse->getResult()->getMessageId())->setChatId($chatId);

$message = $editMessageLiveLocationBuilder->build();
$sendMessageResponse = $telegramService->editMessageLiveLocation($message);

var_dump($sendMessageResponse);
