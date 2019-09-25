<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $fillable = [
        'content', 
        'active_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
