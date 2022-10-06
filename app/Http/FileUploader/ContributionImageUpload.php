<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class ContributionImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'image';
    }

    public function path()
    {
        return 'contribution';
    }
    public function relationName()
    {
        return 'image';
    }
}
