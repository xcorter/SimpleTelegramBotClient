# SimpleTelegramClient

## Usages:

### Initialize

```php
<?php
use SimpleTelegramClient\Config;
use SimpleTelegramClient\TelegramService;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\ArrayTransformerInterface;

require 'SimpleTelegramClient/vendor/autoload.php';

$config = new Config('some-code');


Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$serializer = SerializerBuilder::create()->build();
/** @var ArrayTransformerInterface $arrayTransformer */
$arrayTransformer = SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer, $arrayTransformer);

```

### Get Updates
```php
<?php
$telegramService->getUpdates();
```

### Send message

```php
<?php
use SimpleTelegramClient\Builder\SendMessageBuilder;

$chatId = '1234';
$sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
$message = $sendMessageBuilder->build();
$telegramService->sendMessage($message);
```

More examples you can find in `./examples` folder.

### PROXY
If you have problems with telegram connection you can use proxy.
```php
<?php
use SimpleTelegramClient\Config;

$config = new Config('some key');
$config->setProxy('socks4://ip:port');
```

requirements:
- guzzle
- jms-serializer
