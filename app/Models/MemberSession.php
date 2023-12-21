<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberSession extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'session_id', 'member_id', 'created_at', 'updated_at'];
	protected $table = 'member_sessions';


	public function Session()
	{
		return $this->belongsTo(Session::class);
	}

	public function member()
	{
		return $this->belongsTo(Member::class);
	}
}
