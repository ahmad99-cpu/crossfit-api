<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberClass extends Model
{
    use HasFactory;

    protected $fillable= ['id', 'members_id', 'sessions_id', 'created_at', 'updated_at'];
    protected $table = 'gym_classes';
}

