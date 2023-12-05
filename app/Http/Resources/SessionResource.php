<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'instructor_id' => InsructorResource::make($this->id),
            'gym_classes_id' => GymClassResource::make($this->id),
        ];
    }
}
