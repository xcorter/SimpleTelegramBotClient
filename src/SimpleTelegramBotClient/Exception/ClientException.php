<?php

namespace SimpleTelegramBotClient\Exception;

use Exception;
use SimpleTelegramBotClient\Dto\Response\Error;
use Throwable;

class ClientException extends Exception
{
    /**
     * @var Error|null
     */
    private $response;

    public function __construct(?Error $response, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }

    /**
     * @return Error|null
     */
    public function getResponse(): ?Error
    {
        return $this->response;
    }
}
