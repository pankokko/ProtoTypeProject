<?php

namespace App\Http\Controllers;

use App\Services\Skill\SkillService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $socialSkillService;

    public function __construct(SkillService $socialSkillService)
    {
        $this->middleware('auth');
        $this->socialSkillService = $socialSkillService;
    }

    public function index()
    {

        $socialSkills = $this->socialSkillService->fetchAllSocialSkills();
        return view('home', compact('socialSkills'));
    }
}
