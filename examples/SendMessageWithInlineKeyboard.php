<?php


use SimpleTelegramBotClient\Builder\Keyboard\ArrayKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardButtonBuilder;
use SimpleTelegramBotClient\Builder\Keyboard\InlineKeyboardMarkupBuilder;
use SimpleTelegramBotClient\Builder\Action\SendMessageBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';

// SET YOUR OWN
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
$sendMessageResponse = $telegramService->sendMessage($message);

var_dump($sendMessageResponse);
