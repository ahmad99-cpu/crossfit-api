<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request) {
		return [
			'id' => $this->id,
			'personal_trainer' => PersonalTrainerResource::make($this->personal_trainer),
			'members' => MemberResource::make($this->members),
		];
	}
}
