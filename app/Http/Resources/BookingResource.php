<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            // 'personal_trainer_id' => PersonalTrainerResource::make($this->id),
            // 'member_id' => MemberResource::make($this->id),
            'personal_trainer' => new PersonalTrainerResource($this->personalTrainer),
            'member' => new MemberResource($this->member),
        ];
    }
}
