<?php

include './init.php';

$chatId = '337129589';

$document = fopen('./resources/chereshnya.txt', 'rb');
$sendDocumentBuilder = new \SimpleTelegramBotClient\Builder\Action\SendDocumentBuilder($chatId, $document);
$response = $telegramService->sendDocument($sendDocumentBuilder->build());
var_dump($response);