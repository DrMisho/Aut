<?php

namespace App\Models;


use App\Http\FileUploader\ClientSayFileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\SiteBuilder\Models\Builder;
use Aut\FileUpload\Traits\FileUpload;


class ClientSay extends Model
{
    use SoftDeletes;
    use FileUpload;
    use Builder;
    
    protected $fillable = ['client_name', 'say', 'file_id', 'company'];
    protected $appends = ['file_path'];

    public function file()
    {
        return $this->fileRelation(ClientSayFileUpload::class, 'file_id');
    }
    public function getFilePathAttribute()
    {
        return $this->getFilePath(ClientSayFileUpload::class);
    }
}
