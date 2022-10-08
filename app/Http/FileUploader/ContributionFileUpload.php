<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\Uploader;

class ContributionFileUpload extends Uploader
{
    public function folderName()
    {
        return 'file';
    }

    public function path()
    {
        return 'contribution';
    }
    public function relationName()
    {
        return 'file';
    }
}
