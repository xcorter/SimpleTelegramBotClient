<?php

use SimpleTelegramBotClient\Builder\Action\DeleteChatPhotoBuilder;

include './init.php';

$chatId = '165068132';

$builder = new DeleteChatPhotoBuilder($chatId);
$message = $builder->build();
$response = $telegramService->deleteChatPhoto($message);
var_dump($response);

