<?php

namespace App\Http\Resources;

use App\Http\Controllers\Api\SessionController;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
			'name' => $this->name,
			'phone_number' => $this->phone_number,
			'email' => $this->email,
			'password' => $this->password,
			'sessions' => (new SessionController)->scheduleFormat($this->sessions),
		];
	}
}
