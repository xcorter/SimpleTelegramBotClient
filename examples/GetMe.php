<?php

include './init.php';

$response = $telegramService->getMe();
var_dump($response);
