<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
        protected $fillable = [
          'grade_id',
          'title',
          'content',
          'order_index',
          'xp_reward'
        ];


    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

        public function studentSkillProgress()
    {
        return $this->hasMany(StudentSkillProgress::class);
    }

    public function game()
    {
        return $this->hasMany(Game::class);
    }


}
