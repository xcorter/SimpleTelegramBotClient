<?php

use SimpleTelegramBotClient\Builder\Action\StopMessageLiveLocationBuilder;
use SimpleTelegramBotClient\Builder\Action\SendLocationBuilder;

include './init.php';

$chatId = '165068132';

// SEND LOCATION WITH LIVE PERIOD
$sendLocationBuilder = new SendLocationBuilder($chatId, 1.12, 2.2334);
$sendLocationBuilder->setLivePeriod(100);

$message = $sendLocationBuilder->build();
$sendMLocationResponse = $telegramService->sendLocation($message);

// EDIT LOCATION
$stopMessageLiveLocationBuilder = new StopMessageLiveLocationBuilder();
$stopMessageLiveLocationBuilder->setMessageId($sendMLocationResponse->getResult()->getMessageId())->setChatId($chatId);

$message = $stopMessageLiveLocationBuilder->build();
$sendMessageResponse = $telegramService->stopMessageLiveLocation($message);

var_dump($sendMessageResponse);
