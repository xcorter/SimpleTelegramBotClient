<?php

namespace SimpleTelegramBotClient\Constant;

class ChatAction
{
    public const TYPING = 'typing';
    public const UPLOAD_PHOTO = 'upload_photo';
    public const RECORD_VIDEO = 'record_video';
    public const UPLOAD_VIDEO = 'upload_video';
    public const RECORD_AUDIO = 'record_audio';
    public const UPLOAD_AUDIO = 'upload_audio';
    public const UPLOAD_DOCUMENT = 'upload_document';
    public const FIND_LOCATION = 'find_location';
    public const RECORD_VIDEO_NOTE = 'record_video_note';
    public const UPLOAD_VIDEO_NOTE = 'upload_video_note';

    public const ACTIONS = [
        self::TYPING,
        self::UPLOAD_PHOTO,
        self::RECORD_VIDEO,
        self::UPLOAD_VIDEO,
        self::RECORD_AUDIO,
        self::UPLOAD_AUDIO,
        self::UPLOAD_DOCUMENT,
        self::FIND_LOCATION,
        self::RECORD_VIDEO_NOTE,
        self::UPLOAD_VIDEO_NOTE,
    ];
}
