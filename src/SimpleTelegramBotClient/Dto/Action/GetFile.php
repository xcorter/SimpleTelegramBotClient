<?php

namespace SimpleTelegramBotClient\Dto\Action;

use JMS\Serializer\Annotation\Type;

class GetFile implements ActionInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private $fileId;

    /**
     * GetFile constructor.
     * @param string $fileId
     */
    public function __construct(string $fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }
}
