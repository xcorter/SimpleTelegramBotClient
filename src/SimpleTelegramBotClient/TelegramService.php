<?php

namespace SimpleTelegramBotClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use SimpleTelegramBotClient\Dto\Action\EditMessageLiveLocation;
use SimpleTelegramBotClient\Dto\Action\SendContact;
use SimpleTelegramBotClient\Dto\Action\SendMediaGroup;
use SimpleTelegramBotClient\Dto\Action\SendVenue;
use SimpleTelegramBotClient\Dto\Action\SendVideoNote;
use SimpleTelegramBotClient\Dto\Action\SendVoice;
use SimpleTelegramBotClient\Dto\Action\StopMessageLiveLocation;
use function GuzzleHttp\Psr7\stream_for;
use JMS\Serializer\ArrayTransformerInterface;
use JMS\Serializer\SerializerInterface;
use SimpleTelegramBotClient\Dto\Action\ActionInterface;
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
use SimpleTelegramBotClient\Exception\BadMethodCallException;

/**
 * Class TelegramService
 * @package SimpleTelegramBotClient
 *
 * @method SendMessageResponse sendAudio(SendAudio $sendAudio)
 * @method SendMessageResponse sendPhoto(SendPhoto $sendPhoto)
 * @method SendMessageResponse forwardMessage(ForwardMessage $forwardMessage)
 * @method SendMessageResponse sendMessage(SendMessage $message)
 * @method SendMessageResponse sendDocument(SendDocument $sendDocument)
 * @method SendMessageResponse sendVideo(SendVideo $sendVideo)
 * @method SendMessageResponse sendVideoNote(SendVideoNote $sendVideoNote)
 * @method SendMessageResponse sendAnimation(SendAnimation $sendAnimation)
 * @method SendMessageResponse sendLocation(SendLocation $sendLocation)
 * @method SendMessageResponse sendContact(SendContact $sendContact)
 * @method SendMessageResponse editMessageLiveLocation(EditMessageLiveLocation $editMessageLiveLocation)
 * @method SendMessageResponse stopMessageLiveLocation(StopMessageLiveLocation $stopMessageLiveLocation)
 * @method SendMessageResponse sendVenue(SendVenue $sendVenue)
 * @method SendMessageResponse sendVoice(SendVoice $sendVoice)
 * @method SendMessageResponse sendMediaGroup(SendMediaGroup $sendMediaGroup)
 */
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
     * @var SerializerInterface|ArrayTransformerInterface
     */
    private $serializer;

    /**
     * TelegramService constructor.
     * @param Config $config
     * @param ClientInterface $client
     * @param SerializerInterface $serializer
     */
    public function __construct(
        Config $config,
        ClientInterface $client,
        SerializerInterface $serializer
    ) {
        $this->config = $config;
        $this->client = $client;
        $this->serializer = $serializer;
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

    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     * @throws BadMethodCallException
     */
    public function __call(string $method, array $arguments)
    {
        if (!$arguments) {
            throw new BadMethodCallException('arguments not found');
        }
        $action = reset($arguments);
        if (!$action instanceof ActionInterface) {
            throw new BadMethodCallException("action $method not found");
        }
        if (!$this->checkMethod($method, $action)) {
            throw new BadMethodCallException("action $method not found");
        }
        $url = $this->config->getUrl() . $method;
        $params = $this->serializer->toArray($action);
        if (method_exists($action, 'getReplyMarkup') && $action->getReplyMarkup()) {
            $json = $this->serializer->serialize($action->getReplyMarkup(), 'json');
            $params['reply_markup'] = $json;
        }
        if (method_exists($action, 'getThumb') && $thumb = $action->getThumb()) {
            $params['thumb'] = stream_for($thumb);
        }
        if ($action instanceof SendAudio) {
            $params['audio'] = stream_for($action->getAudio());
        } elseif ($action instanceof SendPhoto) {
            $params['photo'] = stream_for($action->getPhoto());
        } elseif ($action instanceof SendDocument) {
            $params['document'] = stream_for($action->getDocument());
        } elseif ($action instanceof SendVideo) {
            $params['video'] = stream_for($action->getVideo());
        } elseif ($action instanceof SendAnimation) {
            $params['animation'] = stream_for($action->getAnimation());
        } elseif ($action instanceof SendVoice) {
            $params['voice'] = stream_for($action->getVoice());
        } elseif ($action instanceof SendVideoNote) {
            $params['video_note'] = stream_for($action->getVideoNote());
        } elseif ($action instanceof SendMediaGroup) {
            $params['media'] = $this->serializer->serialize($action->getMedia(), 'json');
        }
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        return $this->serializer->deserialize($response, SendMessageResponse::class, 'json');
    }

    private function checkMethod(string $method, ActionInterface $action): bool
    {
        $className = get_class($action);
        $explodedClass = explode('\\', $className);
        $className = end($explodedClass);
        $className[0] = strtolower($className[0]);
        return $className === $method;
    }
}
