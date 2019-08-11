<?php

use SimpleTelegramBotClient\Builder\Action\SendVideoNoteBuilder;

include './init.php';

$chatId = '165068132';

$video = fopen('./resources/chereshnya.mp4', 'rb');
$sendVideoNoteBuilder = new SendVideoNoteBuilder($chatId, $video);

$message = $sendVideoNoteBuilder->build();
$sendMessageResponse = $telegramService->sendVideoNote($message);

var_dump($sendMessageResponse);
