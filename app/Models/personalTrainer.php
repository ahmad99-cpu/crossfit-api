<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTrainer extends Model
{
	use HasFactory;

	protected $fillable = ['id', 'name', 'phone_number', 'created_at', 'updated_at'];
	protected $table = 'personal_trainers';
}
