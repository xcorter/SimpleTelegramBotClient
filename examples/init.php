<?php

use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\TelegramService;

require '../vendor/autoload.php';

$telegramKey = file_get_contents(__DIR__ . '/.telegramkey');
$telegramKey = trim($telegramKey);

$config = new Config($telegramKey);

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$serializer = SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer);
