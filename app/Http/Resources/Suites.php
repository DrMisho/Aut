<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Suites extends JsonResource
{

    public static $wrap = 'suites';
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
            'suite_code' => $this->suite_code,
            'name' => $this->name,
            'long_name' => $this->long_name,
            'show_order' => $this->whenPivotLoaded('solution_suite', function () {
                return $this->pivot->show_order;
            }),
            'solutions' => $this->suiteSolutions,
        ];
    }
}
