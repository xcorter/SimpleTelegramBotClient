<?php

use SimpleTelegramBotClient\Builder\Action\SendVenueBuilder;

include './init.php';

$chatId = '165068132';

$sendVenueBuilder = new SendVenueBuilder($chatId, 1.12, 2.2334, 'Title', 'address');

$message = $sendVenueBuilder->build();
$sendMLocationResponse = $telegramService->sendVenue($message);

var_dump($sendMLocationResponse);
