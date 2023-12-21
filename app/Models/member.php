<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['id', 'name', 'phone_number', 'email', 'password', 'created_at', 'updated_at'];
	protected $table = 'members';

	public function gymClasses()
	{
		return $this->hasMany(MemberClass::class, 'member_id');
	}

	public function sessions()
	{
		return $this->belongsToMany(Session::class, 'member_classes', 'member_id');
	}
}
