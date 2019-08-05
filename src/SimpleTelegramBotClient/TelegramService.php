<?php

namespace SimpleTelegramBotClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use function GuzzleHttp\Psr7\stream_for;
use JMS\Serializer\ArrayTransformerInterface;
use JMS\Serializer\SerializerInterface;
use SimpleTelegramBotClient\Dto\Action\ForwardMessage;
use SimpleTelegramBotClient\Dto\Action\SendAnimation;
use SimpleTelegramBotClient\Dto\Action\SendAudio;
use SimpleTelegramBotClient\Dto\Action\SendDocument;
use SimpleTelegramBotClient\Dto\Action\SendLocation;
use SimpleTelegramBotClient\Dto\Action\SendMessage;
use SimpleTelegramBotClient\Dto\Action\SendPhoto;
use SimpleTelegramBotClient\Dto\Action\SendVideo;
use SimpleTelegramBotClient\Dto\GetMeResponse;
use SimpleTelegramBotClient\Dto\Response;
use SimpleTelegramBotClient\Dto\SendMessageResponse;

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
     * @param ArrayTransformerInterface $arrayTransformer
     */
    public function __construct(
        Config $config,
        ClientInterface $client,
        SerializerInterface $serializer,
        ArrayTransformerInterface $arrayTransformer
    ) {
        $this->config = $config;
        $this->client = $client;
        $this->serializer = $serializer;
        $this->arrayTransformer = $arrayTransformer;
    }

    public function getUpdates(): Response
    {
        $url = $this->config->getUrl() . 'getUpdates';
        return $this->sendRequest($url, Response::class);
    }

    public function getMe(): GetMeResponse
    {
        $url = $this->config->getUrl() . 'getMe';
        return $this->sendRequest($url, GetMeResponse::class);
    }

    public function sendMessage(SendMessage $message): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendMessage';
        $params = $this->arrayTransformer->toArray($message);
        if ($message->getReplyMarkup()) {
            $json = $this->serializer->serialize($message->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        return $this->sendRequest($url, SendMessageResponse::class, $params, 'POST');
    }

    public function forwardMessage(ForwardMessage $message): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'forwardMessage';
        $params = $this->arrayTransformer->toArray($message);
        return $this->sendRequest($url, SendMessageResponse::class, $params, 'POST');
    }

    public function sendPhoto(SendPhoto $message): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendPhoto';
        $params = $this->arrayTransformer->toArray($message);
        if ($message->getReplyMarkup()) {
            $json = $this->serializer->serialize($message->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        $params['photo'] = stream_for($message->getPhoto());
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    public function sendAudio(SendAudio $sendAudio): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendAudio';
        $params = $this->arrayTransformer->toArray($sendAudio);
        if ($sendAudio->getReplyMarkup()) {
            $json = $this->serializer->serialize($sendAudio->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        if ($thumb = $sendAudio->getThumb()) {
            $params['thumb'] = stream_for($thumb);
        }
        $params['audio'] = stream_for($sendAudio->getAudio());
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    private function sendRequest(string $url, string $type, array $params = [], string $method = 'GET')
    {
        $requestParams = $this->getParams();
        if ($params) {
            $requestParams['form_params'] = $params;
        }
        if ($method === 'POST') {
            $response = $this->client->post($url, $requestParams);
        } else {
            $response = $this->client->get($url, $requestParams);
        }
        $result = $response->getBody()->getContents();
        return $this->serializer->deserialize($result, $type, 'json');
    }

    private function convertToNameContent(array $associativeArray): array
    {
        $result = [];
        foreach ($associativeArray as $key => $value) {
            $result[] = [
                'name' => $key,
                'contents' => $value,
            ];
        }
        return $result;
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

    public function sendDocument(SendDocument $sendDocument): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendDocument';
        $params = $this->arrayTransformer->toArray($sendDocument);
        if ($sendDocument->getReplyMarkup()) {
            $json = $this->serializer->serialize($sendDocument->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        if ($thumb = $sendDocument->getThumb()) {
            $params['thumb'] = stream_for($thumb);
        }
        $params['document'] = stream_for($sendDocument->getDocument());
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    public function sendVideo(SendVideo $sendVideo): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendVideo';
        $params = $this->arrayTransformer->toArray($sendVideo);
        if ($sendVideo->getReplyMarkup()) {
            $json = $this->serializer->serialize($sendVideo->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        if ($thumb = $sendVideo->getThumb()) {
            $params['thumb'] = stream_for($thumb);
        }
        $params['video'] = stream_for($sendVideo->getVideo());
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    public function sendAnimation(SendAnimation $sendAnimation): SendMessageResponse
    {
        $url = $this->config->getUrl() . 'sendAnimation';
        $params = $this->arrayTransformer->toArray($sendAnimation);
        if ($sendAnimation->getReplyMarkup()) {
            $json = $this->serializer->serialize($sendAnimation->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        if ($thumb = $sendAnimation->getThumb()) {
            $params['thumb'] = stream_for($thumb);
        }
        $params['animation'] = stream_for($sendAnimation->getAnimation());
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    public function sendLocation(SendLocation $sendLocation)
    {
        $url = $this->config->getUrl() . 'sendLocation';
        $params = $this->arrayTransformer->toArray($sendLocation);
        if ($sendLocation->getReplyMarkup()) {
            $json = $this->serializer->serialize($sendLocation->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }
}
