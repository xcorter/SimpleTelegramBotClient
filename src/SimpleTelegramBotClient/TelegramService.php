<?php

namespace SimpleTelegramBotClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException as GuzzleClientException;
use SimpleTelegramBotClient\Builder\Action\Webhook\SetWebhookBuilder;
use SimpleTelegramBotClient\Dto\Action\AnswerCallbackQuery;
use SimpleTelegramBotClient\Dto\Action\DeleteChatPhoto;
use SimpleTelegramBotClient\Dto\Action\DeleteChatStickerSet;
use SimpleTelegramBotClient\Dto\Action\EditMessageLiveLocation;
use SimpleTelegramBotClient\Dto\Action\ExportChatInviteLink;
use SimpleTelegramBotClient\Dto\Action\GetChat;
use SimpleTelegramBotClient\Dto\Action\GetChatAdministrators;
use SimpleTelegramBotClient\Dto\Action\GetChatMembersCount;
use SimpleTelegramBotClient\Dto\Action\GetFile;
use SimpleTelegramBotClient\Dto\Action\GetUserProfilePhotos;
use SimpleTelegramBotClient\Dto\Action\KickChatMember;
use SimpleTelegramBotClient\Dto\Action\LeaveChat;
use SimpleTelegramBotClient\Dto\Action\PinChatMessage;
use SimpleTelegramBotClient\Dto\Action\PromoteChatMember;
use SimpleTelegramBotClient\Dto\Action\RestrictChatMember;
use SimpleTelegramBotClient\Dto\Action\SendChatAction;
use SimpleTelegramBotClient\Dto\Action\SendContact;
use SimpleTelegramBotClient\Dto\Action\SendMediaGroup;
use SimpleTelegramBotClient\Dto\Action\SendPoll;
use SimpleTelegramBotClient\Dto\Action\SendVenue;
use SimpleTelegramBotClient\Dto\Action\SendVideoNote;
use SimpleTelegramBotClient\Dto\Action\SendVoice;
use SimpleTelegramBotClient\Dto\Action\SetChatDescription;
use SimpleTelegramBotClient\Dto\Action\SetChatPermissions;
use SimpleTelegramBotClient\Dto\Action\SetChatPhoto;
use SimpleTelegramBotClient\Dto\Action\SetChatStickerSet;
use SimpleTelegramBotClient\Dto\Action\SetChatTitle;
use SimpleTelegramBotClient\Dto\Action\StopMessageLiveLocation;
use SimpleTelegramBotClient\Dto\Action\UnbanChatMember;
use SimpleTelegramBotClient\Dto\Action\UnpinChatMessage;
use SimpleTelegramBotClient\Dto\Action\Webhook\DeleteWebhook;
use SimpleTelegramBotClient\Dto\Action\Webhook\SetWebhook;
use SimpleTelegramBotClient\Dto\Response\Error;
use SimpleTelegramBotClient\Dto\Response\ChatInviteLinkResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatAdministratorsResponse;
use SimpleTelegramBotClient\Dto\Response\GetChatResponse;
use SimpleTelegramBotClient\Dto\Response\GetUserProfilePhotosResponse;
use SimpleTelegramBotClient\Dto\Response\Response;
use SimpleTelegramBotClient\Dto\Response\SimpleResponse;
use SimpleTelegramBotClient\Exception\ClientException;
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
use SimpleTelegramBotClient\Dto\Response\GetMeResponse;
use SimpleTelegramBotClient\Dto\Response\IntResultResponse;
use SimpleTelegramBotClient\Dto\Response\SendMessageResponse;
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
 * @method SendMessageResponse sendPoll(SendPoll $sendPoll)
 * @method SimpleResponse sendChatAction(SendChatAction $sendChatAction)
 * @method SendMessageResponse editMessageLiveLocation(EditMessageLiveLocation $editMessageLiveLocation)
 * @method SendMessageResponse stopMessageLiveLocation(StopMessageLiveLocation $stopMessageLiveLocation)
 * @method SendMessageResponse sendVenue(SendVenue $sendVenue)
 * @method SendMessageResponse sendVoice(SendVoice $sendVoice)
 * @method SendMessageResponse sendMediaGroup(SendMediaGroup $sendMediaGroup)
 * @method GetUserProfilePhotosResponse getUserProfilePhotos(GetUserProfilePhotos $getUserProfilePhotos)
 * @method GetUserProfilePhotosResponse getFile(GetFile $getFile)
 * @method SimpleResponse kickChatMember(KickChatMember $kickChatMember)
 * @method SimpleResponse unbanChatMember(UnbanChatMember $unbanChatMember)
 * @method SimpleResponse restrictChatMember(RestrictChatMember $restrictChatMember)
 * @method SimpleResponse promoteChatMember(PromoteChatMember $promoteChatMember)
 * @method SimpleResponse setChatPermissions(SetChatPermissions $setChatPermissions)
 * @method SimpleResponse setChatPhoto(SetChatPhoto $setChatPhoto)
 * @method SimpleResponse deleteChatPhoto(DeleteChatPhoto $deleteChatPhoto)
 * @method SimpleResponse setChatDescription(SetChatDescription $setChatDescription)
 * @method SimpleResponse pinChatMessage(PinChatMessage $pinChatMessage)
 * @method SimpleResponse unpinChatMessage(UnpinChatMessage $unpinChatMessage)
 * @method SimpleResponse leaveChat(LeaveChat $leaveChat)
 * @method SimpleResponse setChatStickerSet(SetChatStickerSet $setChatStickerSet)
 * @method SimpleResponse deleteChatStickerSet(DeleteChatStickerSet $deleteChatStickerSet)
 * @method SimpleResponse answerCallbackQuery(AnswerCallbackQuery $answerCallbackQuery)
 * @method SimpleResponse setWebhook(SetWebhook $setWebhook)
 * @method SimpleResponse deleteWebhook(DeleteWebhook $deleteWebhook)
 * @method GetChatAdministratorsResponse getChatAdministrators(GetChatAdministrators $getChatAdministrators)
 * @method IntResultResponse getChatMembersCount(GetChatMembersCount $getChatMembersCount)
 * @method GetChatResponse getChat(GetChat $getChat)
 * @method SetChatTitle setChatTitle(SetChatTitle $setChatTitle)
 * @method ChatInviteLinkResponse exportChatInviteLink(ExportChatInviteLink $exportChatInviteLink)
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
     * @var ResponseFactory
     */
    private $responseFactory;

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
        $this->responseFactory = new ResponseFactory();
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

    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     * @throws BadMethodCallException
     * @throws ClientException
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
        } elseif ($action instanceof SetChatPhoto) {
            $params['photo'] = stream_for($action->getPhoto());
        } elseif ($action instanceof SetWebhook) {
            $params['allowed_updates'] = json_encode($action->getAllowedUpdates());
        } elseif ($action instanceof SendPoll) {
            $params['options'] = json_encode($action->getOptions());
        } elseif ($action instanceof SetWebhook) {
            $params['certificate'] = stream_for($action->getCertificate());
        } elseif (
            $action instanceof RestrictChatMember
            || $action instanceof SetChatPermissions
        ) {
            $params['permissions'] = $this->serializer->serialize($action->getPermissions(), 'json');
        }
        $requestParams = $this->getParams();
        $requestParams['multipart'] = $this->convertToNameContent($params);
        try {
            $response = $this->client->post($url, $requestParams)->getBody()->getContents();
        } catch (GuzzleClientException $exception) {
            $response = null;
            if ($exception->getResponse()) {
                $content = $exception->getResponse()->getBody()->getContents();
                $response = $this->serializer->deserialize($content, Error::class, 'json');
            }
            throw new ClientException($response, $exception->getMessage(), $exception->getCode(), $exception);
        }

        $responseClass = $this->responseFactory->getResponseClass($action);
        return $this->serializer->deserialize($response, $responseClass, 'json');
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

    private function checkMethod(string $method, ActionInterface $action): bool
    {
        $className = get_class($action);
        $explodedClass = explode('\\', $className);
        $className = end($explodedClass);
        $className[0] = strtolower($className[0]);
        return $className === $method;
    }
}
