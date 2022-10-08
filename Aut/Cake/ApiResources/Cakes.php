<?php

namespace Aut\Cake\ApiResources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cakes extends JsonResource
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
            'cake_name' => $this->cake_name,
            'price' => (int)$this->price,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'created_at_timestamp' => $this->created_at->getTimestamp(),
            'create_date' => $this->created_at->format('Y-m-d'),
        ];
    }
}

