<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name',
        'min_points',
        'max_points',
        'icon'
    ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
