<?php

use GuzzleHttp\Client;
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\TelegramService;

require '../vendor/autoload.php';

$telegramKey = file_get_contents(__DIR__ . '/.telegramkey');
$telegramKey = trim($telegramKey);

$config = new Config($telegramKey);
$config->setProxy('http://51.158.108.135:8811');

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$serializer = \JMS\Serializer\SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer);
