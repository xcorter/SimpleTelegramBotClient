<?php

use SimpleTelegramClient\Builder\Action\SendPhotoBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '12345678';

// SET YOUR OWN
$file = fopen('./chereshnya.jpeg', 'rb');
$sendPhotoBuilder = new SendPhotoBuilder($chatId, $file);
$sendPhotoBuilder->setCaption('Caption');

$message = $sendPhotoBuilder->build();
$sendMessageResponse = $telegramService->sendPhoto($message);

var_dump($sendMessageResponse);
