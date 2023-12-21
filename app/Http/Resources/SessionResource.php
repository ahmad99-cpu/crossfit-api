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
			'period' => $this->period,
			'instructor' => InstructorResource::make($this->instructor),
			'gym_class' => GymClassResource::make($this->gymClass),
		];
	}
}
