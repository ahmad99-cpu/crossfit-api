<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberClassResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            // 'member_id' => MemberResource::make($this->id),
            // 'session_id' => SessionResource::make($this->id),
            'member_id' => $this->member_id,
            'session_id' => $this->session_id,
        ];
    }
}
