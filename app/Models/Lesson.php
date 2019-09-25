<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Models\Course::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Models\Question::class);
    }
}
