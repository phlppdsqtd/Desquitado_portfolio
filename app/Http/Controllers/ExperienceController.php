<?php

namespace App\Http\Controllers;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index() {
        $work = Experience::where('type', 'work')->get();
        $education = Experience::where('type', 'education')->get();
        return view('pages.experience', compact('work', 'education'));
    }
}