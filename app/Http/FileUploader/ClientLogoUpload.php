<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class ClientLogoUpload extends ImageUploader
{
    public function folderName()
    {
        return 'logo';
    }

    public function path()
    {
        return 'client';
    }
    public function relationName()
    {
        return 'logo';
    }
}
