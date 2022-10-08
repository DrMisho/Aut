<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class BranchLogoUpload extends ImageUploader
{
    public function folderName()
    {
        return 'logo';
    }

    public function path()
    {
        return 'branch';
    }

    public function relationName()
    {
        return 'logo';
    }
}
