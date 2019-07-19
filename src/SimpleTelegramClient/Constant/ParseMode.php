<?php

namespace SimpleTelegramClient\Constant;

class ParseMode
{
    public const HTML = 'HTML';
    public const MARKDOWN = 'Markdown';

    public const AVAILABLE_VALUES = [self::HTML, self::MARKDOWN];
}
