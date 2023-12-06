<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'startTime', 'endTime','instructor_id', 'gym_class_id', 'created_at', 'updated_at'];
    protected $table = 'sessions';

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function gymClass()
    {
        return $this->belongsTo(GymClass::class);
    }

    public function gymClasses()
    {
        return $this->hasMany(memberClass::class, 'session_id');
    }
}
