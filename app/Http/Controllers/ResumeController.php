<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Professional;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        $education = Education::all();
        $prof = Professional::all();
        $data = Skill::all();
        return view('front.resume', compact('data', 'prof', 'education', 'experience'));
    }
}
