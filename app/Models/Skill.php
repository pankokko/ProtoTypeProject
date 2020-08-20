<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    const RATE_ZERO = 0;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
