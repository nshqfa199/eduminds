<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'birth_date',
        'avatar'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studentprofile()
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function progresses()
    {
        return $this->hasMany(StudentSkillProgress::class);
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class)
            ->withPivot('earned_at')
            ->withTimestamps();
    }

        public function PointTransaction()
    {
        return $this->hasMany(PointsTransaction::class);
    }
}
