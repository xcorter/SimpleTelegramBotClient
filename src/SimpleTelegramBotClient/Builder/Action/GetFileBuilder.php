<?php

namespace SimpleTelegramBotClient\Builder\Action;

use SimpleTelegramBotClient\Dto\Action\GetFile;

class GetFileBuilder
{
    /**
     * @var string
     */
    private $fileId;

    /**
     * GetFileBuilder constructor.
     * @param string $fileId
     */
    public function __construct(string $fileId)
    {
        $this->fileId = $fileId;
    }

    public function build(): GetFile
    {
        return new GetFile($this->fileId);
    }
}
