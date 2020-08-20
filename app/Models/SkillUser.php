<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillUser extends Model
{

    protected $fillable = [
        'skill_id',
        'user_id',
        'rate',  // ユーザーの自己評価
    ];


}
