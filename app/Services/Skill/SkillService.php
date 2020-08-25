<?php

namespace App\Services\Skill;

use App\Models\Skill;

class SkillService
{
    public function fetchAllSocialSkills()
    {
        return Skill::all();
    }
}
