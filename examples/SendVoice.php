<?php

use SimpleTelegramBotClient\Builder\Action\SendVoiceBuilder;

include './init.php';

$chatId = '165068132';

$voice = fopen('./resources/cat_need_chereshnya.mp3', 'rb');
$sendVoiceBuilder = new SendVoiceBuilder($chatId, $voice);

$message = $sendVoiceBuilder->build();
$sendMessageResponse = $telegramService->sendVoice($message);

var_dump($sendMessageResponse);
