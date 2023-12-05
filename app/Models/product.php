<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'description', 'photo', 'price', 'created_at', 'updated_at'];
    protected $table = 'products';
}
