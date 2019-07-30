<?php

use SimpleTelegramBotClient\Builder\Action\SendVideoBuilder;

include './init.php';

$chatId = '337129589';

$video = fopen('./resources/Video.mp4', 'rb');
$thumb = fopen('./resources/chereshnya.jpeg', 'rb');
$sendPhotoBuilder = new SendVideoBuilder($chatId, $video);
$sendPhotoBuilder->setThumb($thumb);

$message = $sendPhotoBuilder->build();
$sendMessageResponse = $telegramService->sendVideo($message);

var_dump($sendMessageResponse);

