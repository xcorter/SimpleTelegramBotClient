<?php

use SimpleTelegramBotClient\Builder\Action\ForwardMessageBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';
$fromChatId = '165068132';

$forwardMessageBuilder = new ForwardMessageBuilder($chatId, $fromChatId, 92);

$message = $forwardMessageBuilder->build();
$sendMessageResponse = $telegramService->forwardMessage($message);

var_dump($sendMessageResponse);
