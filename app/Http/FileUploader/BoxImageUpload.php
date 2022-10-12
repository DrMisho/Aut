<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class BoxImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'box';
    }


}