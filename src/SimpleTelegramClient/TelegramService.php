<?php

namespace SimpleTelegramClient;

use GuzzleHttp\Client;
use JMS\Serializer\SerializerInterface;
use SimpleTelegramClient\Dto\GetMeResponse;
use SimpleTelegramClient\Dto\Response;

class TelegramService
{
    /**
     * @var Config
     */
    private $config;
    /**
     * @var Client
     */
    private $client;
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * TelegramService constructor.
     * @param Config $config
     * @param Client $client
     * @param SerializerInterface $serializer
     */
    public function __construct(Config $config, Client $client, SerializerInterface $serializer)
    {
        $this->config = $config;
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function getUpdates()
    {
        $url = $this->config->getUrl() . 'getUpdates';
        $result = $this->client->get($url)->getBody()->getContents();
        $obj = $this->serializer->deserialize($result, Response::class, 'json');
        return $obj;
    }

    public function getMe()
    {
        $url = $this->config->getUrl() . 'getMe';
        $result = $this->client->get($url)->getBody()->getContents();
        $obj = $this->serializer->deserialize($result, GetMeResponse::class, 'json');
        return $obj;
    }
}
