<?php

namespace App\Services\Skill;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SelfEvaluationService
{


    public function storeStep1(array $evaluations, int $userId)
    {
        $user = User::find($userId);
        DB::beginTransaction();
        try {
            foreach ($evaluations as $key => $value) {
                $user->skills()->attach(
                    ['skill_id' => $key],
                    ['rate' => $value == null ? $value = Skill::RATE_ZERO : $value]
                );
            }
        } catch (\Exception $error) {
            DB::rollBack();
            logger()->error($error->getMessage());
            return false;
        }

        DB::commit();
        return true;
    }
}
