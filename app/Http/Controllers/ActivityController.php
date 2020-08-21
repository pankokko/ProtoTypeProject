<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActivityUser;
use App\Http\Controllers\Controller;
use App\Services\Activity\ActivityService;

class ActivityController extends Controller
{
    protected $activityService;
    protected $maxDay;

    public function __construct(ActivityService $activityService)
    {
        $this->maxDay = Carbon::today()->toDateString();
        $this->activityService = $activityService;

    }

    public function step1()
    {
        $activities = $this->activityService->fetchAllActivities();
        return view('Activity.activity1_register', compact('activities'));
    }

    public function registerStep1(Request $request)
    {
        $activities = $request->input('activities');
        $userId = auth()->guard('web')->id();
        $data = $this->activityService->storeStep1($activities, $userId);
        if ($data) {
            return redirect()->route('activity.step2');
        }
    }

    public function step2()
    {
        $userId = auth()->guard('web')->id();
        $activities = $this->activityService->fetchUserActivities($userId);
        $maxDay = $this->maxDay;

        return view('Activity.activity2_register', compact('activities', 'maxDay'));
    }

    public function registerStep2(Request $request)
    {
        $userId = auth()->guard('web')->id();
        $activities = $request->input('activities');
        $data = $this->activityService->storeStep2($activities, $userId);
        if ($data) {
            return redirect()->route('activity.step3');
        }
    }

    public function step3()
    {
        $userId = auth()->guard('web')->id();
        $activities = $this->activityService->fetchUserActivities($userId);
        $maxDay = $this->maxDay;
        return view('Activity.activity3_register', compact('activities', 'maxDay'));
    }

    public function registerStep3(Request $request)
    {
        $userId = auth()->guard('web')->id();
        $activities = $request->input('activities');
        $data = $this->activityService->storeStep3($activities, $userId);
        if ($data) {
            return redirect()->route('activity.step3');
        }
    }
}



