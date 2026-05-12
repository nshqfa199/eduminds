<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $fillable = [
        'student_id',
        'current_grade_id',
        'current_level_id',
        'current_points',
        'current_points',
        'longest_streak',
        'total_games_played'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    



}
