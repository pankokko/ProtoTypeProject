<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    const  CONTINUING = "on";

    public function users()
    {
        return $this->belongsToMany('App\Models\User')
            ->withPivot('id')
            ->withPivot('is_continue')
            ->withPivot('finished_at')
            ->withPivot('started_at')
            ->withPivot('period');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill')
            ->withPivot('skill_id')
            ->withPivot('activity_id');
    }
}
