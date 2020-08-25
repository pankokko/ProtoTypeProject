<?php

namespace App\Calculation;

trait AiCalculationRule
{
    private static function pointRule()
    {
        return [
            'under_half_year' => 0.3,
            'over_half_year'  => 0.5,
            'over_year'       => 1,
            'over_two_year'   => 1.5,
        ];
    }

    private static function assessmentPeriodRule()
    {
        return [
            'half_year'     => 180,
            'over_year'     => 365,
            'over_two_year' => 730,
        ];
    }

    private static function calculateByAi($userActivities)
    {
        $aiRate = [];
        foreach ($userActivities as $userActivity) {
            if ($userActivity->pivot->period > self::assessmentPeriodRule()['half_year'] && $userActivity->pivot->period < self::assessmentPeriodRule()['over_year']) {
                $aiRate[$userActivity->pivot->activity_id] = self::pointRule()['over_half_year'];
            } elseif ($userActivity->pivot->period > self::assessmentPeriodRule()['over_year']) {
                $aiRate[$userActivity->pivot->activity_id] = self::pointRule()['over_year'];
            } else {
                $aiRate[$userActivity->pivot->activity_id] = self::pointRule()['under_half_year'];
            }
        }
        return $aiRate;
    }
}
