<?php

use SimpleTelegramBotClient\Builder\Action\SetChatTitleBuilder;

include './init.php';

$chatId = '165068132';

$builder = new SetChatTitleBuilder($chatId, 'title');
$message = $builder->build();
$response = $telegramService->setChatTitle($message);
var_dump($response);
