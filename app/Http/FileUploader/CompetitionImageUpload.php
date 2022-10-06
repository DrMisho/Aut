<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class CompetitionImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'competition';
    }

}
