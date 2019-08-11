<?php

namespace SimpleTelegramBotClient;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;

class TelegramServiceFactory
{
    /**
     * @param Config $config
     * @return TelegramService
     */
    public static function create(Config $config): TelegramService
    {
        AnnotationRegistry::registerLoader('class_exists');
        $serializer = SerializerBuilder::create()->build();
        return new TelegramService($config, new Client(), $serializer);
    }
}
