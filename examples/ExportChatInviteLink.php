<?php

use SimpleTelegramBotClient\Builder\Action\ExportChatInviteLinkBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

$builder = new ExportChatInviteLinkBuilder($chatId);
$message = $builder->build();

$response = $telegramService->exportChatInviteLink($message);

var_dump($response);
