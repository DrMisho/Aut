<?php

namespace Aut\News\ApiResources;

use Illuminate\Http\Resources\Json\JsonResource;

class News extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'user' => $this->user->name,
            'user_id' => $this->user->id,
            'type' => $this->type->name,
            'type_id' => $this->type->id,
            'status' => $this->status->name,
            'status_id' => $this->status->id,
            'seo' => $this->seo->title,
            'seo_id' => $this->seo->id,
            'tag' => Tags::collection($this->tag),
            'image_path' => $this->image_path,
            'file_path' => $this->file_path,
            'publish_at' => $this->publish_at->format('Y-m-d'),
        ];
    }
}

