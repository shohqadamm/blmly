<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'mentor_id', 'title', 'description', 'status',
    ];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'lesson_student', 'lesson_id', 'student_id');
    }
}
