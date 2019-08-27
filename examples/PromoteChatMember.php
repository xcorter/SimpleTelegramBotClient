<?php

use SimpleTelegramBotClient\Builder\Action\PromoteChatMemberBuilder;

include './init.php';

// SET YOUR OWN
$chatId = '165068132';
$userId = 234;

$promoteChatMemberBuilder = new PromoteChatMemberBuilder($chatId, $userId);
$promoteChatMemberBuilder->setCanChangeInfo(true);
$promoteChatMember = $promoteChatMemberBuilder->build();

$response = $telegramService->promoteChatMember($promoteChatMember);

var_dump($response);
