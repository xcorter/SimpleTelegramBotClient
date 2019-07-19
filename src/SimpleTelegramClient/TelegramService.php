<?php

namespace SimpleTelegramClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\ArrayTransformerInterface;
use JMS\Serializer\SerializerInterface;
use SimpleTelegramClient\Dto\Action\SendMessage;
use SimpleTelegramClient\Dto\GetMeResponse;
use SimpleTelegramClient\Dto\Response;
use SimpleTelegramClient\Dto\SendMessageResponse;

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
     * @var ArrayTransformerInterface
     */
    private $arrayTransformer;

    /**
     * TelegramService constructor.
     * @param Config $config
     * @param ClientInterface $client
     * @param SerializerInterface $serializer
     */
    public function __construct(Config $config, ClientInterface $client, SerializerInterface $serializer, ArrayTransformerInterface $arrayTransformer)
    {
        $this->config = $config;
        $this->client = $client;
        $this->serializer = $serializer;
        $this->arrayTransformer = $arrayTransformer;
    }

    public function getUpdates(): Response
    {
        $url = $this->config->getUrl() . 'getUpdates';
        $params = $this->getParams();
        $result = $this->client->get($url, $params)->getBody()->getContents();
        return $this->serializer->deserialize($result, Response::class, 'json');
    }

    public function getMe(): GetMeResponse
    {
        $url = $this->config->getUrl() . 'getMe';
        $params = $this->getParams();
        $result = $this->client->get($url, $params)->getBody()->getContents();
        return $this->serializer->deserialize($result, GetMeResponse::class, 'json');
    }

    public function sendMessage(SendMessage $message): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendMessage';
        $array = $this->arrayTransformer->toArray($message);
        $json = $this->serializer->serialize($message->getReplyMarkup(), 'json');
        $array['reply_markup'] = $json;
        $params = $this->getParams();
        $params['form_params'] = $array;
        $result = $this->client->post($url, $params)->getBody()->getContents();
        return $this->serializer->deserialize($result, SendMessageResponse::class, 'json');
    }

    private function getParams(): array
    {
        if ($this->config->getProxy()) {
            return [
                'proxy' => $this->config->getProxy()
            ];
        }
        return [];
    }
}
