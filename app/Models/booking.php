<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'personal_trainer_id', 'members_id', 'created_at', 'updated_at'];
    protected $table = 'bookings';
}
