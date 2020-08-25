<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Skill\SelfEvaluationService;
use App\Http\Controllers\Controller;

class SelfEvaluationController extends Controller
{
    protected $selfEvaluationService;

    public function __construct(SelfEvaluationService $selfEvaluationService)
    {
        $this->selfEvaluationService = $selfEvaluationService;
    }

    public function step1(Request $request)
    {
        $userId = auth()->guard('web')->id();
        $evaluations = $request->input('evaluations');
        $query = $this->selfEvaluationService->storeStep1($evaluations, $userId);

        if ($query) {
            return redirect()->route('activity.step1');
        }
    }


}
