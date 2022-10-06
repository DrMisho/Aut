<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\Uploader;

class ClientFileUpload extends Uploader
{
    public function folderName()
    {
        return 'files';
    }

    public function path()
    {
        return 'client';
    }
    public function relationName()
    {
        return 'file';
    }
}
