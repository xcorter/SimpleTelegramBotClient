<?php

use SimpleTelegramBotClient\Builder\Action\SendMediaGroupBuilder;
use SimpleTelegramBotClient\Builder\Type\InputMediaPhotoBuilder;
use SimpleTelegramBotClient\Builder\Type\InputMediaVideoBuilder;

include './init.php';

$chatId = '165068132';

$sendMediaGroupBuilder = new SendMediaGroupBuilder($chatId);
$inputMediaVideoBuilder = new InputMediaVideoBuilder('BAADAgADtAIAAk78gUq7BhANg6k_xBYE');
$inputMediaPhotoBuilder = new InputMediaPhotoBuilder('AgADAgADgasxG6vtgEoJZkOykvbLmc_Ntw8ABAEAAwIAA20AAzUwAgABFgQ');
$sendMediaGroupBuilder
    ->addMedia($inputMediaVideoBuilder->build())
    ->addMedia($inputMediaPhotoBuilder->build())
;

$message = $sendMediaGroupBuilder->build();
$sendMessageResponse = $telegramService->sendMediaGroup($message);

var_dump($sendMessageResponse);
