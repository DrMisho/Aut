<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialNetworks extends JsonResource
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
            'icon_id' => $this->icon_id,
            'social_order' => $this->name,
            'name' => $this->name,
            'account' => $this->whenPivotLoaded('team_social', function () {
                return $this->pivot->account;
            }),
        ];
    }
}
