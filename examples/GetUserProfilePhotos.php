<?php

use SimpleTelegramBotClient\Builder\Action\GetUserProfilePhotosBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

$userId = 81602149;

$getUserProfilePhotosBuilder = new GetUserProfilePhotosBuilder($userId);

$message = $getUserProfilePhotosBuilder->build();
$sendMessageResponse = $telegramService->getUserProfilePhotos($message);

var_dump($sendMessageResponse);
