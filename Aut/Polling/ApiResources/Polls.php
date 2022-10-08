<?php

namespace Aut\Polling\ApiResources;

use Illuminate\Http\Resources\Json\JsonResource;
use Aut\Polling\ApiResources\Options;
use Aut\Polling\Models\Option;

class Polls extends JsonResource
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
            'maxCheck' => $this->maxCheck,
            'canVisitorsVote' => $this->canVisitorsVote,
            'canVoterSeeResult' => $this->canVoterSeeResult ,
            'isClosed' => $this->isClosed,
            'starts_at' => $this->starts_at ,
            'ends_at' => $this->ends_at ,
            'question' => $this->question ,
            'options' => Options:::collection(Option::class) ,
           

        ];
    }
}

