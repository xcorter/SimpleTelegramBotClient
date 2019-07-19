<?php

include './init.php';

$response = $telegramService->getUpdates();
var_dump($response);
