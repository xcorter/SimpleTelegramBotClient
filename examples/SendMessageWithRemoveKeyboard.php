<?php

use SimpleTelegramBotClient\Builder\Keyboard\ReplyKeyboardRemoveBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '12345';

$sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
$replyKeyboardRemove = (new ReplyKeyboardRemoveBuilder())->build();

$sendMessageBuilder->setReplyMarkup($replyKeyboardRemove);
$message = $sendMessageBuilder->build();
$sendMessageResponse = $telegramService->sendMessage($message);

var_dump($sendMessageResponse);
