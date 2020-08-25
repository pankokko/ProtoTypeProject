<?php


namespace App\Calculation;

use App\Models\Activity;
use Illuminate\Support\Arr;

class AiCalculation
{
    const MAX_RATE = 5;
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
            foreach($activity->skills as $skill) {
                if(!array_key_exists($skill->id ,$data)){ //存在しないキーがある場合は初期値
                    $data[$skill->id] = 0;
                }
                if ($data[$skill->id] < self::MAX_RATE)
                $data[$skill->id] += $value; //calculateByAiで割り出した値を挿入
            }
        }
//        dd(array_count_values($aiRate));
        ksort($data);
        $data = Arr::prepend($data, 4, '1');
        return $data;
    }
}
