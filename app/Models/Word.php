<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'content', 
        'status',
    ];

    public function question()
    {
        return $this->belongsTo(Models\Question::class);
    }
}
