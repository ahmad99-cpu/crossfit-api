<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
{

	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'start_time' => $this->start_time,
			'end_time' => $this->end_time,
			// 'instructor_id' => InstructorResource::make($this->id),
			// 'gym_class_id' => GymClassResource::make($this->id),
			'instructor' => new InstructorResource($this->instructor),
			'gym_class' => new GymClassResource($this->gymClass),
		];
	}
}
