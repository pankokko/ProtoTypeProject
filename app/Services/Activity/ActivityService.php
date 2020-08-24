<?php

namespace App\Services\Activity;

use App\Models\Activity;
use App\Models\User;
use App\Models\ActivityUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ActivityService
{
    public function fetchAllActivities()
    {
        return Activity::all();
    }

    public function fetchUserActivities(int $userId)
    {
        $user = User::find($userId);
        return $user->activities;
    }

    public function storeStep1(array $activities, int $userId)
    {
        $user = User::find($userId);
        DB::beginTransaction();
        try {
            foreach ($activities as $key => $value) {
                $user->activities()->attach(
                    ['activity_id' => $key]
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

    public function storeStep2(array $data, int $userId)
    {
        $user = User::find($userId);
        DB::beginTransaction();
        try {
            //$key = activity_id
            foreach ($data as $key => $value) {
                $user->activities()->syncWithoutDetaching([$key => ['started_at' => $value]]);
            }
        } catch (\Exception $error) {
            DB::rollback();
            logger()->error($error->getMessage());
            return false;
        }
        DB::commit();
        return true;
    }

    public function storeStep3(array $data, int $userId)
    {
        $user = User::find($userId);
        DB::beginTransaction();
        try {
            //$key = activity_id
            foreach ($data as $key => $value) {
                $startedAt = new Carbon(ActivityUser::where([
                    'activity_id' => $key,
                    'user_id'     => $userId
                ])->first()->started_at);
                if (isset($value['is_continue'])) {
                    //継続中以外の場合はnullとなる
                    $user->activities()->syncWithoutDetaching([
                        $key => [
                            'is_continue' => Carbon::today()->toDateString(),
                            'period'      => $startedAt->diffInDays(new Carbon($value['finished_at']))
                        ],
                    ]);
                } elseif (isset($value['finished_at'])) {
                    $user->activities()->syncWithoutDetaching([
                        $key => [
                            'finished_at' => $value['finished_at'],
                            'period'      => $startedAt->diffInDays(new Carbon($value['finished_at']))
                        ]
                    ]);
                }
            }
        } catch (\Exception $error) {
            DB::rollback();
            logger()->error($error->getMessage());
            return false;
        }
        DB::commit();
        return true;
    }


}
