<?php

use SimpleTelegramBotClient\Builder\Action\GetFileBuilder;

include './init.php';

$fileId = 'AgADAgADAqgxG-W8dQXkhnSrMjWwg-mimg4ABAEAAwIAA2EAAwN6AAIWBA';

$getFileBuilder = new GetFileBuilder($fileId);
$getFile = $getFileBuilder->build();

$response = $telegramService->getFile($getFile);
var_dump($response);
