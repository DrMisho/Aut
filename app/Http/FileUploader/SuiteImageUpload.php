<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\ImageUploader;

class SuiteImageUpload extends ImageUploader
{
    public function folderName()
    {
        return 'suite';
    }


}