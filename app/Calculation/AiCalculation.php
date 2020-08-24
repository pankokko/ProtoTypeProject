<?php


namespace App\Calculation;

use App\Models\User;
use App\Models\Activity;
use App\Models\ActivitySkill;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class AiCalculation
{
    use AiCalculationRule;

    /**
     * @param $user
     * @throws \Exception
     */

    public  function calculate($user)
    {

        $aiRate = $this->calculateByAi($user->activities);

        $data = [];
        foreach ($aiRate as $key => $value) {
           $activity =  Activity::find($key);
            foreach($activity->skills as $key2 => $value2) {
                if(!array_key_exists($value2->id ,$data)){ //存在しないキーがある場合は初期値
                    $data[$value2->id] = 0;
                }
                $data[$value2->id] += $value;
            }
        }
        ksort($data);
        $data = Arr::prepend($data, 4, '1');
        return $data;
    }

//    public static function mergeArray($skills, $aiEvaluations)
//    {
//        foreach ($skills as $skill) {
//            foreach ($aiEvaluations as $key => $value) {
//                if ($skill->id == $key) {
//                    $skill->put([$key, $value]);
//                }
//            }
//
//        }
//    }
}
