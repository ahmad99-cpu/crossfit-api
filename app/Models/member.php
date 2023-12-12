<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	use HasFactory;

	protected $fillable = ['id', 'name', 'phone_number', 'email', 'password', 'created_at', 'updated_at'];
	protected $table = 'members';

	public function gymClasses()
	{
		return $this->hasMany(MemberClass::class, 'member_id');
	}
}
