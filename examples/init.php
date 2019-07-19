<?php

use GuzzleHttp\Client;
use JMS\Serializer\ArrayTransformerInterface;
use SimpleTelegramClient\Config;
use SimpleTelegramClient\TelegramService;

require '../vendor/autoload.php';

$config = new Config('');
//$config->setProxy('socks4://190.109.170.105:43375');

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
/** @var ArrayTransformerInterface $arrayTransformer */
$arrayTransformer = \JMS\Serializer\SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer, $arrayTransformer);
