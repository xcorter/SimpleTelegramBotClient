<?php

namespace SimpleTelegramBotClient\Tests;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use SimpleTelegramBotClient\Builder\Action\SendChatActionBuilder;
use SimpleTelegramBotClient\Builder\Action\SendContactBuilder;
use SimpleTelegramBotClient\Builder\Action\SendLocationBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMediaGroupBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;
use SimpleTelegramBotClient\Builder\Action\SendPollBuilder;
use SimpleTelegramBotClient\Builder\Action\SendVenueBuilder;
use SimpleTelegramBotClient\Builder\Action\SendVideoNoteBuilder;
use SimpleTelegramBotClient\Builder\Action\SendVoiceBuilder;
use SimpleTelegramBotClient\Builder\Action\StopMessageLiveLocationBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\ArrayKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\KeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\ReplyKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Builder\Type\InputMediaPhotoBuilder;
use SimpleTelegramBotClient\Builder\Type\InputMediaVideoBuilder;
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\Constant\ChatAction;
use SimpleTelegramBotClient\Dto\Response as ResponseDto;
use SimpleTelegramBotClient\Dto\SendMessageResponse;
use SimpleTelegramBotClient\Dto\SimpleResponse;
use SimpleTelegramBotClient\TelegramService;

class TelegramServiceTest extends TestCase
{
    private const RESOURCES = __DIR__ . '/../resources/';
    private const CHAT_ID = '165068132';

    /**
     * @var TelegramService
     */
    private $telegramService;
    /**
     * @var Config
     */
    private $config;
    /**
     * @var ClientInterface|MockObject
     */
    private $client;
    /**
     * @var SerializerInterface
     */
    private $serialzier;
    /**
     * @var MockHandler
     */
    private $mockHandler;

    public function setUp(): void
    {
        parent::setUp();
        $this->config = new Config('key');
        $this->mockHandler = new MockHandler();
        $this->client = new Client([
            'handler' => $this->mockHandler,
        ]);

        AnnotationRegistry::registerLoader('class_exists');

        $this->serialzier = SerializerBuilder::create()->build();

        $this->telegramService = new TelegramService(
            $this->config,
            $this->client,
            $this->serialzier
        );
    }

    public function testGetUpdates(): void
    {
        $content = $this->appendToMockHandler('get_updates.json');

        $actual = $this->telegramService->getUpdates();
        $expected = $this->serialzier->deserialize($content, ResponseDto::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testSendMessageWithKeyboard(): void
    {
        $content = $this->appendToMockHandler('send_message_keyboard.json');

        $sendMessageBuilder = new SendMessageBuilder(self::CHAT_ID, 'Hello World!');
        $replyKeyboardMarkupBuilder = new ReplyKeyboardMarkupBuilder();
        $arrayKeyboardButtonBuilder = new ArrayKeyboardButtonBuilder();
        $arrayKeyboardButtonBuilder
            ->add((new KeyboardButtonBuilder('text'))->build())
            ->add((new KeyboardButtonBuilder('text2'))->build())
        ;
        $replyKeyboardMarkupBuilder->addArrayOfKeyboardButton($arrayKeyboardButtonBuilder->build());

        $sendMessageBuilder->setReplyMarkup($replyKeyboardMarkupBuilder->build());
        $message = $sendMessageBuilder->build();

        $actual = $this->telegramService->sendMessage($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testSendMessageInlineResult(): void
    {
        $content = $this->appendToMockHandler('send_message_inline_result.json');

        $sendMessageBuilder = new SendMessageBuilder(self::CHAT_ID, 'Hello World!');
        $inlineKeyboardMarkupBuilder = new InlineKeyboardMarkupBuilder();

        $arrayKeyboardButtonBuilder = new ArrayKeyboardButtonBuilder();
        $arrayKeyboardButtonBuilder
            ->add((new InlineKeyboardButtonBuilder('text'))->setUrl('https://google.com')->build())
            ->add((new InlineKeyboardButtonBuilder('text2'))->setUrl('https://google.com')->build())
        ;

        $arrayKeyboardButtonBuilder2 = new ArrayKeyboardButtonBuilder();
        $arrayKeyboardButtonBuilder2->add((new InlineKeyboardButtonBuilder('long text'))->setUrl('https://google.com')->build());

        $inlineKeyboardMarkupBuilder
            ->addInlineKeyboardButtonArray($arrayKeyboardButtonBuilder->build())
            ->addInlineKeyboardButtonArray($arrayKeyboardButtonBuilder2->build())
        ;

        $sendMessageBuilder->setReplyMarkup($inlineKeyboardMarkupBuilder->build());
        $message = $sendMessageBuilder->build();

        $actual = $this->telegramService->sendMessage($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    public function testSendLocation(): void
    {
        $content = $this->appendToMockHandler('send_location.json');
        $sendLocationBuilder = new SendLocationBuilder(self::CHAT_ID, 0.999997, 2.233401);
        $message = $sendLocationBuilder->build();
        $actual = $this->telegramService->sendLocation($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendVideoNote(): void
    {
        $content = $this->appendToMockHandler('send_video_note.json');
        $sendVideoNoteBuilder = new SendVideoNoteBuilder(self::CHAT_ID, $this->getStubFileStream());
        $message = $sendVideoNoteBuilder->build();
        $actual = $this->telegramService->sendVideoNote($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendVoice(): void
    {
        $content = $this->appendToMockHandler('send_voice.json');

        $sendVoiceBuilder = new SendVoiceBuilder(self::CHAT_ID, $this->getStubFileStream());
        $message = $sendVoiceBuilder->build();
        $actual = $this->telegramService->sendVoice($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendMediaGroup(): void
    {
        $content = $this->appendToMockHandler('send_media_group.json');
        $sendMediaGroupBuilder = new SendMediaGroupBuilder(self::CHAT_ID);
        $inputMediaVideoBuilder = new InputMediaVideoBuilder('BAADAgADtAIAAk78gUq7BhANg6k_xBYE');
        $inputMediaPhotoBuilder = new InputMediaPhotoBuilder('AgADAgADgasxG6vtgEoJZkOykvbLmc_Ntw8ABAEAAwIAA20AAzUwAgABFgQ');
        $sendMediaGroupBuilder
            ->addMedia($inputMediaVideoBuilder->build())
            ->addMedia($inputMediaPhotoBuilder->build())
        ;

        $message = $sendMediaGroupBuilder->build();
        $actual = $this->telegramService->sendMediaGroup($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testStopMessageLiveLocation(): void
    {
        $content = $this->appendToMockHandler('stop_message_live_location.json');

        $stopMessageLiveLocationBuilder = new StopMessageLiveLocationBuilder();
        $stopMessageLiveLocationBuilder->setMessageId(780995632)->setChatId(self::CHAT_ID);
        $message = $stopMessageLiveLocationBuilder->build();
        $actual = $this->telegramService->stopMessageLiveLocation($message);

        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendVenue(): void
    {
        $content = $this->appendToMockHandler('send_venue.json');

        $sendVenueBuilder = new SendVenueBuilder(self::CHAT_ID, 1.12, 2.2334, 'Title', 'address');
        $message = $sendVenueBuilder->build();
        $actual = $this->telegramService->sendVenue($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendContact(): void
    {
        $content = $this->appendToMockHandler('send_contact.json');

        $sendContactBuilder = new SendContactBuilder(self::CHAT_ID, '123123123', 'TestName');
        $message = $sendContactBuilder->build();
        $actual = $this->telegramService->sendContact($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendPoll(): void
    {
        $content = $this->appendToMockHandler('send_poll.json');

        $sendPollBuilder = new SendPollBuilder(self::CHAT_ID, '2+2=?');
        $sendPollBuilder->addOption('2')->addOption('4')->addOption('8');
        $message = $sendPollBuilder->build();
        $actual = $this->telegramService->sendPoll($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    public function testSendChatAction(): void
    {
        $content = $this->appendToMockHandler('send_chat_action.json');

        $sendChatActionBuilder = new SendChatActionBuilder(self::CHAT_ID, ChatAction::TYPING);
        $message = $sendChatActionBuilder->build();
        $actual = $this->telegramService->sendChatAction($message);
        $expected = $this->serialzier->deserialize($content, SimpleResponse::class, 'json');
        $this->assertEquals($expected, $actual);
    }

    /**
     * @param string $resourceName
     * @return string
     */
    private function getResourceContent(string $resourceName): string
    {
        return file_get_contents(self::RESOURCES . $resourceName);
    }

    private function getStubFileStream(): string
    {
        return self::RESOURCES . 'stub_file';
    }

    private function appendToMockHandler(string $resourceName): string
    {
        $content = $this->getResourceContent($resourceName);
        $this->mockHandler->append(new Response(200, [], $content));
        return $content;
    }
}
