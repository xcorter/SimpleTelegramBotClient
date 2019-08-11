<?php

use SimpleTelegramBotClient\Builder\Action\SendVideoBuilder;

include './init.php';

$chatId = '165068132';

$video = fopen('./resources/chereshnya.mp4', 'rb');
$thumb = fopen('./resources/chereshnya.jpeg', 'rb');
$sendVideoBuilder = new SendVideoBuilder($chatId, $video);
$sendVideoBuilder->setThumb($thumb);

$message = $sendVideoBuilder->build();
$sendMessageResponse = $telegramService->sendVideo($message);

var_dump($sendMessageResponse);
