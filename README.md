# SimpleTelegramBotClient

[![Build Status](https://travis-ci.org/xcorter/SimpleTelegramBotClient.svg?branch=master)](https://travis-ci.org/xcorter/SimpleTelegramBotClient)
[![codecov](https://codecov.io/gh/xcorter/SimpleTelegramBotClient/branch/master/graph/badge.svg)](https://codecov.io/gh/xcorter/SimpleTelegramBotClient/)

## Usages:

### Initialize

Basic initialize with

```php
<?php
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\TelegramServiceFactory;

require './vendor/autoload.php';

$config = new Config('some-telegram-api-key');
$telegramService = TelegramServiceFactory::create($config);
```

If you want more control use these:

```php
<?php
use SimpleTelegramBotClient\Config;
use SimpleTelegramBotClient\TelegramService;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;

require './vendor/autoload.php';

$config = new Config('some-telegram-api-key');
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');
$serializer = SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer);
```


### Get Updates
```php
<?php
$telegramService->getUpdates();
```

### Send message

```php
<?php
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;

$chatId = '1234';
$sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
$message = $sendMessageBuilder->build();
$telegramService->sendMessage($message);
```

More examples you can find in `./examples` folder.
Add file `.telegramkey` in `./examples` and put telegram key into it. 

### PROXY
If you have problems with telegram connection you can use proxy.
```php
<?php
use SimpleTelegramBotClient\Config;

$config = new Config('some key');
$config->setProxy('socks4://ip:port');
```

requirements:
- guzzle
- jms-serializer
