<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'phoneNumber', 'email', 'password', 'created_at', 'updated_at'];
    protected $table = 'members';
}
