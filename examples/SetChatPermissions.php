<?php

use SimpleTelegramBotClient\Builder\Action\SetChatPermissionsBuilder;
use SimpleTelegramBotClient\Builder\Type\ChatPermissionsBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

$chatPermissionsBuilder = new ChatPermissionsBuilder();
$chatPermissionsBuilder->allowAll();
$chatPermissions = $chatPermissionsBuilder->build();

$setChatPermissionsBuilder = new SetChatPermissionsBuilder($chatId, $chatPermissions);

$message = $setChatPermissionsBuilder->build();
$response = $telegramService->setChatPermissions($message);

var_dump($response);
