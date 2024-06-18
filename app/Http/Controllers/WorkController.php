<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $data = Project::all();
        return view('front.project', compact('data'));
    }
}
