<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
	use HasFactory;

	protected $fillable = ['id', 'day', 'startTime', 'endTime', 'instructor_id', 'gym_class_id', 'created_at', 'updated_at'];
	protected $table = 'sessions';

	public function instructor()
	{
		return $this->belongsTo(Instructor::class);
	}

	public function gymClass()
	{
		return $this->belongsTo(GymClass::class);
	}
}
