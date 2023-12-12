<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
{

	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'day' => $this->day,
			'start_time' => $this->start_time,
			'end_time' => $this->end_time,
			'instructor' => new InstructorResource($this->instructor),
			'gym_class' => new GymClassResource($this->gymClass),
		];
	}
}
