<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalTrainer extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'phoneNumber', 'created_at', 'updated_at'];
    protected $table = 'personal_trainers';
}
