<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'startTime', 'endTime','instructor_id', 'gym_classes_id', 'created_at', 'updated_at'];
    protected $table = 'sessions';
}
