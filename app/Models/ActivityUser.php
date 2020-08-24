<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityUser extends Model
{
    protected $table = 'activity_user';

    protected  $fillable = [
        'user_id',
        'activity_id',
        'started_at',
        'finished_at',
        'is_finished',
        'period',
        ];
}
