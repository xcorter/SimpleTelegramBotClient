# SimpleTelegramClient

Usages:

```php
<?php

use SimpleTelegramClient\Config;
use SimpleTelegramClient\TelegramService;
use GuzzleHttp\Client;

require 'SimpleTelegramClient/vendor/autoload.php';

$config = new Config('some-code');


Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$serializer = \JMS\Serializer\SerializerBuilder::create()->build();

$telegramService = new TelegramService($config, new Client(), $serializer);

$telegramService->getUpdates();
```


requirements:
- guzzle
- jms-serializer
