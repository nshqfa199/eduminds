<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSkillProgress extends Model
{
    protected $fillable = [
        'student_id',
        'skill_id',
        'status',
        'score',
        'attempts_count'
    ];

    public function student()
    {
         return $this->belongsTo(Student::class);
    }

        public function skill()
    {
         return $this->belongsTo(Skill::class);
    }


}
