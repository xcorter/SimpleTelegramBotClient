<?php

use SimpleTelegramBotClient\Builder\Action\SendPollBuilder;

include './init.php';

$chatId = '-399749550';

$sendPollBuilder = new SendPollBuilder($chatId, '2+2=?');
$sendPollBuilder
    ->addOption('2')
    ->addOption('4')
    ->addOption('8')
;


$message = $sendPollBuilder->build();
$sendPollResponse = $telegramService->sendPoll($message);

var_dump($sendPollResponse);
