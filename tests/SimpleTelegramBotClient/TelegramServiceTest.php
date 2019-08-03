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
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\Dto\Response as ResponseDto;
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
     * @param string $resourceName
     * @return string
     */
    private function getResourceContent(string $resourceName): string
    {
        return file_get_contents(self::RESOURCES . $resourceName);
    }
}
