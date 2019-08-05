<?php

use SimpleTelegramBotClient\Builder\Action\SendPhotoBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

// SET YOUR OWN
$file = fopen('./resources/chereshnya.jpeg', 'rb');
$sendPhotoBuilder = new SendPhotoBuilder($chatId, $file);
$sendPhotoBuilder->setCaption('Caption');

$message = $sendPhotoBuilder->build();
$sendMessageResponse = $telegramService->sendPhoto($message);

var_dump($sendMessageResponse);
