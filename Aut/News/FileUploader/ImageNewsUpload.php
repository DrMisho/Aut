<?php

namespace Aut\News\FileUploader;

use Aut\FileUpload\Uploader;

class ImageNewsUpload extends Uploader
{
    public function folderName()
    {
        return 'image';
    }

    public function path()
    {
        return 'news';
    }

    public function relationName()
    {
        return 'image';
    }

}
