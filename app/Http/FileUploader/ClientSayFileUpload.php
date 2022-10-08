<?php

namespace App\Http\FileUploader;

use Aut\FileUpload\Uploader;

class ClientSayFileUpload extends Uploader
{
    public function folderName()
    {
        return 'client_say';
    }

}
