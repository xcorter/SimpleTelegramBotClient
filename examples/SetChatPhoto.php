<?php

use SimpleTelegramBotClient\Builder\Action\SetChatPhotoBuilder;

include './init.php';

$chatId = '165068132';

$chatPhoto = fopen('./resources/chereshnya.jpeg', 'rb');
$setChatPhotoBuilder = new SetChatPhotoBuilder($chatId, $chatPhoto);
$message = $setChatPhotoBuilder->build();
$response = $telegramService->setChatPhoto($message);
var_dump($response);
