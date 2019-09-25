<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 
        'options', 
        'answer',
    ];

    public function lesson()
    {
        return $this->belongsTo(Models\Lesson::class);
    }

    public function words()
    {
        return $this->hasMany(Models\Words::class);
    }
}
