<?php

use SimpleTelegramBotClient\Builder\Action\SetChatDescriptionBuilder;

include './init.php';

$chatId = '165068132';

$builder = new SetChatDescriptionBuilder($chatId);
$builder->setDescription('1231231');
$message = $builder->build();
$response = $telegramService->setChatDescription($message);
var_dump($response);
