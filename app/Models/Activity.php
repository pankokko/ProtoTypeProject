<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    const  CONTINUING = "on";

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
