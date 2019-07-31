<?php

use SimpleTelegramBotClient\Builder\Action\SendAnimationBuilder;

include './init.php';

$chatId = '337129589';

$animation = fopen('./resources/gifka.gif', 'rb');
$thumb = fopen('./resources/chereshnya.jpeg', 'rb');
$sendPhotoBuilder = new SendAnimationBuilder($chatId, $animation);
$sendPhotoBuilder->setThumb($thumb);

$message = $sendPhotoBuilder->build();
$sendMessageResponse = $telegramService->sendAnimation($message);

var_dump($sendMessageResponse);