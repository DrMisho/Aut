<?php

namespace Aut\News\ApiResources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsTags extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'news' => $this->news->title,
            'tag' => $this->tag->name,
        ];
    }
}

