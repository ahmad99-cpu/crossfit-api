<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gymClass extends Model
{
    use HasFactory;

    protected $fillable= ['id', 'name', 'created_at', 'updated_at'];
    protected $table = 'gym_classes';

}
