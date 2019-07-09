<?php

namespace SimpleTelegramClient;

class Config
{
    /**
     * @var string
     */
    private $host = 'https://api.telegram.org/';

    /**
     * @var string
     */
    private $key;

    /**
     * Config constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->host . 'bot' . $this->key . '/';
    }
}
