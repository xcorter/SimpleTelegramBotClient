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
     * @var string|null
     */
    private $proxy;

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

    /**
     * @return string|null
     */
    public function getProxy(): ?string
    {
        return $this->proxy;
    }

    /**
     * @param string|null $proxy
     * @return Config
     */
    public function setProxy(?string $proxy): Config
    {
        $this->proxy = $proxy;
        return $this;
    }
}
