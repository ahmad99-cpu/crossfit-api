<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	use HasFactory;

	protected $fillable = ['id', 'personal_trainer_id', 'member_id', 'created_at', 'updated_at'];
	protected $table = 'bookings';


	public function personalTrainer()
	{
		return $this->belongsTo(PersonalTrainer::class, 'personal_trainer_id');
	}

	public function member()
	{
		return $this->belongsTo(Member::class, 'member_id');
	}
}
