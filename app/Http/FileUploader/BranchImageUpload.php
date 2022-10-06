<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class BranchImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'image';
    }

    public function path()
    {
        return 'branch';
    }
}
