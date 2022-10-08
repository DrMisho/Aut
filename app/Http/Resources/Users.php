<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Users extends JsonResource
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
            'username' => "{$this->username}",
            'email' => $this->email,
            'avatar_path' => $this->when($this->image_path, $this->image_path, 'images/user.png'),
            'admin' => true,//$this->when($this->hasAnyPermission(['automata', 'admin']), true, false),
        ];
    }
}
