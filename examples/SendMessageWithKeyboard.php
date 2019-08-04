<?php

use SimpleTelegramBotClient\Builder\Keyboard\ArrayKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\KeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\ReplyKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

// SET YOUR OWN
$sendMessageBuilder = new SendMessageBuilder($chatId, 'Hello World!');
$replyKeyboardMarkupBuilder = new ReplyKeyboardMarkupBuilder();

$arrayKeyboardButtonBuilder = new ArrayKeyboardButtonBuilder();
$arrayKeyboardButtonBuilder
    ->add((new KeyboardButtonBuilder('text'))->build())
    ->add((new KeyboardButtonBuilder('text2'))->build())
;

$arrayKeyboardButtonBuilder2 = new ArrayKeyboardButtonBuilder();
$arrayKeyboardButtonBuilder2->add((new KeyboardButtonBuilder('long text'))->build());


$replyKeyboardMarkupBuilder
    ->addArrayOfKeyboardButton($arrayKeyboardButtonBuilder->build())
    ->addArrayOfKeyboardButton($arrayKeyboardButtonBuilder2->build())
;

$sendMessageBuilder->setReplyMarkup($replyKeyboardMarkupBuilder->build());
$message = $sendMessageBuilder->build();
$sendMessageResponse = $telegramService->sendMessage($message);

var_dump($sendMessageResponse);
