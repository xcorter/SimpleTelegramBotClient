<?php

namespace SimpleTelegramBotClient\Tests;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\ArrayTransformerInterface;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use SimpleTelegramBotClient\Builder\Action\SendLocationBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\ArrayKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\KeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\ReplyKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\Dto\Response as ResponseDto;
use SimpleTelegramBotClient\Dto\SendMessageResponse;
use SimpleTelegramBotClient\TelegramService;

class TelegramServiceTest extends TestCase
{
    private const RESOURCES = __DIR__ . '/../resources/';

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
     * @var ArrayTransformerInterface
     */
    private $arrayTransformer;
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

        $this->serialzier = \JMS\Serializer\SerializerBuilder::create()->build();
        /** @var ArrayTransformerInterface $arrayTransformer */
        $this->arrayTransformer = \JMS\Serializer\SerializerBuilder::create()->build();

        $this->telegramService = new TelegramService(
            $this->config,
            $this->client,
            $this->serialzier,
            $this->arrayTransformer
        );
    }

    public function testGetUpdates(): void
    {
        $content = $this->getResourceContent('get_updates.json');
        $this->mockHandler->append(new Response(200, [], $content));

        $actual = $this->telegramService->getUpdates();
        $expected = $this->serialzier->deserialize($content, ResponseDto::class, 'json');

        $this->assertEquals($expected, $actual);
    }

    /**
     *
     */
    public function testSendMessageWithKeyboard(): void
    {
        $content = $this->getResourceContent('send_message_keyboard.json');
        $this->mockHandler->append(new Response(200, [], $content));

        $chatId = '165068132';
        $sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
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
        $content = $this->getResourceContent('send_message_inline_result.json');
        $this->mockHandler->append(new Response(200, [], $content));

        $chatId = '165068132';
        $sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
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
        $content = $this->getResourceContent('send_location.json');
        $this->mockHandler->append(new Response(200, [], $content));
        $chatId = '165068132';
        $sendLocationBuilder = new SendLocationBuilder($chatId, 0.999997, 2.233401);
        $message = $sendLocationBuilder->build();
        $actual = $this->telegramService->sendLocation($message);
        $expected = $this->serialzier->deserialize($content, SendMessageResponse::class, 'json');
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
}
