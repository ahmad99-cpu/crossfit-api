<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberClass extends Model
{
	use HasFactory;

	protected $fillable = ['id', 'member_id', 'session_id', 'created_at', 'updated_at'];
	protected $table = 'member_classes';

	public function member()
	{
		return $this->belongsTo(Member::class, 'member_id');
	}

	public function session()
	{
		return $this->belongsTo(Session::class, 'session_id');
	}
}

