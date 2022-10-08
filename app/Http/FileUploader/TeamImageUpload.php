<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class TeamImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'team';
    }

    public function relationName()
    {
        return 'image';
    }
}
