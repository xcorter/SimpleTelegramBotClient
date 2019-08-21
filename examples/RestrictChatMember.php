<?php

use SimpleTelegramBotClient\Builder\Action\RestrictChatMemberBuilder;
use SimpleTelegramBotClient\Builder\Type\ChatPermissionsBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';
$userId = 234;

$chatPermissionsBuilder = new ChatPermissionsBuilder();
$chatPermissionsBuilder->allowAll();
$chatPermissions = $chatPermissionsBuilder->build();

$restrictChatMemberBuilder = new RestrictChatMemberBuilder($chatId, $userId, $chatPermissions);

$message = $restrictChatMemberBuilder->build();
$response = $telegramService->restrictChatMember($message);

var_dump($response);
