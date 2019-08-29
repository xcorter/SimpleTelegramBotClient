<?php

use SimpleTelegramBotClient\Builder\Action\SetChatPhotoBuilder;

include './init.php';

$chatId = '165068132';

$chatPhoto = fopen('./resources/chereshnya.jpeg', 'rb');
$builder = new SetChatPhotoBuilder($chatId, $chatPhoto);
$message = $builder->build();
$response = $telegramService->setChatPhoto($message);
var_dump($response);
