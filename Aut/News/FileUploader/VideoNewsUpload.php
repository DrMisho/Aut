<?php

namespace Aut\News\FileUploader;

use Aut\FileUpload\Uploader;

class VideoNewsUpload extends Uploader
{
    public function folderName()
    {
        return 'video';
    }

    public function path()
    {
        return 'news';
    }
}
