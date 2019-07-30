<?php

use SimpleTelegramBotClient\Builder\Action\SendAudioBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

// SET YOUR OWN
$audio = fopen('./resources/cat_need_chereshnya.mp3', 'rb');
$thumb = fopen('./resources/chereshnya.jpeg', 'rb');
$sendPhotoBuilder = new SendAudioBuilder($chatId, $audio);
$sendPhotoBuilder->setThumb($thumb);

$message = $sendPhotoBuilder->build();
$sendMessageResponse = $telegramService->sendAudio($message);

var_dump($sendMessageResponse);
